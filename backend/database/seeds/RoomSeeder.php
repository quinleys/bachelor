<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 800, "point2": 800}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 1,
            'user_id' => 1,
            'layout_id' => 1,
            'active' => 1,
        ]);
    }
}
