<?php

use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tables')->insert([
            'persons' => '1',
            'name' => 'Tafel voor 1',
        ]);
        DB::table('tables')->insert([
            'persons' => '2',
            'name' => 'Tafel voor 2',
        ]);
        DB::table('tables')->insert([
            'persons' => '3',
            'name' => 'Tafel voor 3',
        ]);
        DB::table('tables')->insert([
            'persons' => '4',
            'name' => 'Tafel voor 4',
        ]);
        DB::table('tables')->insert([
            'persons' => '5',
            'name' => 'Tafel voor 5',
        ]);
        DB::table('tables')->insert([
            'persons' => '6',
            'name' => 'Tafel voor 6',
        ]);
        DB::table('tables')->insert([
            'persons' => '7',
            'name' => 'Tafel voor 7',
        ]);
        DB::table('tables')->insert([
            'persons' => '8',
            'name' => 'Tafel voor 8',
        ]);
        DB::table('tables')->insert([
            'persons' => '2',
            'name' => 'Ronde tafel voor 2',
        ]);
        DB::table('tables')->insert([
            'persons' => '3',
            'name' => 'Ronde tafel voor 3',
        ]);
        DB::table('tables')->insert([
            'persons' => '4',
            'name' => 'Ronde tafel voor 4',
        ]);
        DB::table('tables')->insert([
            'persons' => '5',
            'name' => 'Ronde tafel voor 5',
        ]);
        DB::table('tables')->insert([
            'persons' => '6',
            'name' => 'Ronde tafel voor 6',
        ]);
        DB::table('tables')->insert([
            'persons' => '7',
            'name' => 'Ronde tafel voor 7',
        ]);
        DB::table('tables')->insert([
            'persons' => '8',
            'name' => 'Ronde tafel voor 8',
        ]);
    }
}
