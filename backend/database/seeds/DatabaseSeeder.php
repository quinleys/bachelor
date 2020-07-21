<?php

use Illuminate\Database\Seeder;
use Spatie\OpeningHours\OpeningHours;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
/*          DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'test'.'@gmail.com',
            'password' => Hash::make('password'),
        ]);   */
        /* DB::table('categories')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
        ]);
        DB::table('tables')->insert([
            'persons' => 2,
            'name' => "Tafel voor 2",
        ]); */
/*         DB::table('restaurant_table')->insert([
            'table_id' => 1,
            'restaurant_id' => 1,
        ]); */
        /* DB::table('reservations')->insert([
            'user_id' => 1,
            'restaurant_id' => 1,
            'date' => \Carbon\Carbon::createFromDate(2000,01,01)->toDateTimeString(),
            'time' => \Carbon\Carbon::createFromDate(2000,01,01)->toDateTimeString(),
            'persons' => 3,
            "table_id" => 1
        ]); */
        DB::table('restaurants')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
            'address' => Str::random(10),
            'category_Id' => 1,
            'openinghours' => OpeningHours::create([
                'monday'     => ['09:00-12:00', '13:00-18:00'],
                'tuesday'    => ['09:00-12:00', '13:00-18:00'],
                'wednesday'  => ['09:00-12:00'],
                'thursday'   => ['09:00-12:00', '13:00-18:00'],
                'friday'     => ['09:00-12:00', '13:00-20:00'],
                'saturday'   => ['09:00-12:00', '13:00-16:00'],
                'sunday'     => [],
                'exceptions' => [
                    '2016-11-11' => ['09:00-12:00'],
                    '2016-12-25' => [],
                    '01-01'      => [],                // Recurring on each 1st of January
                    '12-25'      => ['09:00-12:00'],   // Recurring on each 25th of December
                ],
            ]),
        ]);
        
        /* DB:table('tables')->insert([
            'persons' => 2,
            'name' => 'Tafel voor 2',
        ]);
        
        DB:table('restaurant_table')->insert([
            'table_id' => 1,
            'restaurant_id' => 1,                                                   
        ]); */
    }
}
