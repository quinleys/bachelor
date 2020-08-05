<?php
namespace Deployer;

require 'recipe/laravel.php';
require 'recipe/rsync.php';

// Project name
set('application', 'bachelor');
set('repository', 'git@github.com:quinleys/bachelor.git');
set('default_stage', 'staging');

add(
    'rsync',
    [
        'exclude' => [
            'deploy.php',
            'node_modules',
            '/resources/lang',
            '.env',
            'bootstrap/cache/*',
        ],
    ]
);

// Shared files/dirs between deploys
add(
    'shared_files',
    [
        'public/.htaccess',
        'public/.htpasswd',
    ]
);


add('shared_dirs', [
    'resources/lang'
]);

set('writable_dirs', []);

// Hosts
host('staging')
    ->hostname('quinten.staging.7.web.codedor.online')
    ->user('vd16007')
    ->set('deploy_path', '~/')
    ->set('rsync_src', '.')
    ->set('rsync_dest', '{{release_path}}')
    ->stage('staging');

// Tasks
task(
    'reload:php-fpm',
    function () {
        run('sudo service php7.4-fpm restart');
    }
);

task('deploy', [
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'rsync',
    'deploy:shared',
    'deploy:writable',
    'artisan:storage:link',
    'artisan:view:cache',
    'artisan:config:cache',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
])->desc('Deploy your project');

desc('Clear route cache');
task('artisan:route:clear', function () {
    run('{{bin/php}} {{release_path}}/artisan route:clear');
})->once();

desc('Public storage link');
task('artisan:storage:link', function () {
    run('{{bin/php}} {{release_path}}/artisan storage:link');
})->once();

desc('Clear Cache');
task('artisan:cache:clear', function () {
    runLocally('php artisan cache:clear');
    runLocally('php artisan config:clear');
});

desc('Cache Config');
task('artisan:configcache:cache', function () {
    run('{{bin/php}} {{release_path}}/artisan config:cache');
});

desc('Dump autoload');
task('composer:dumpautoload', function () {
    run('cd {{release_path}} && {{bin/composer}} dump-autoload -o');
})->once();


task('deploy:update_code', ['rsync']);

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

after('deploy:shared', 'composer:dumpautoload');
before('deploy:symlink', 'artisan:migrate');
before('deploy:symlink', 'artisan:route:clear');
before('deploy:symlink', 'artisan:storage:link');
after('deploy:symlink', 'reload:php-fpm');
after('deploy:symlink', 'artisan:configcache:cache');
