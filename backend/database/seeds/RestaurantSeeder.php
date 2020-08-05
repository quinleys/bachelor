<?php

use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'title' => Str::random(10),
            'description' => Str::random(10),
            'address' => 'Molenstraat 3, 9700 Oudenaarde, Belgium',
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
    }
}
