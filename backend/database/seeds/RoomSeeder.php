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
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 1,
            'user_id' => 1,
            'layout_id' => 1,
            'active' => 1,
        ]);
        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 800, "point2": 800}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 2',
            'restaurant_id' => 1,
            'user_id' => 1,
            'layout_id' => 2,
            'active' => 1,
        ]);

        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 2,
            'user_id' => 2,
            'layout_id' => 3,
            'active' => 1,
        ]);

        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 3,
            'user_id' => 3,
            'layout_id' => 4,
            'active' => 1,
        ]);

        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 4,
            'user_id' => 4,
            'layout_id' => 5,
            'active' => 1,
        ]);

        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 5,
            'user_id' => 5,
            'layout_id' => 6,
            'active' => 1,
        ]);

        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 5,
            'user_id' => 5,
            'layout_id' => 7,
            'active' => 1,
        ]);

        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 6,
            'user_id' => 6,
            'layout_id' => 8,
            'active' => 1,
        ]);

        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 7,
            'user_id' => 7,
            'layout_id' => 9,
            'active' => 1,
        ]);

        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 8,
            'user_id' => 8,
            'layout_id' => 10,
            'active' => 1,
        ]);

        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 9,
            'user_id' => 9,
            'layout_id' => 11,
            'active' => 1,
        ]);

        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 10,
            'user_id' => 10,
            'layout_id' => 12,
            'active' => 1,
        ]);

        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 11,
            'user_id' => 11,
            'layout_id' => 13,
            'active' => 1,
        ]);
        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 12,
            'user_id' => 12,
            'layout_id' => 14,
            'active' => 1,
        ]);
        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 13,
            'user_id' => 13,
            'layout_id' => 15,
            'active' => 1,
        ]);
        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 14,
            'user_id' => 14,
            'layout_id' => 16,
            'active' => 1,
        ]);
        DB::table('rooms')->insert([
            'walls' => '[{"id": 1, "point1": 0, "point2": 0}, {"id": 2, "point1": 1000, "point2": 0}, {"id": 3, "point1": 1000, "point2": 1000}, {"id": 4, "point1": 0, "point2": 1000}]',
            'title' => 'Kamer 1',
            'restaurant_id' => 15,
            'user_id' => 15,
            'layout_id' => 17,
            'active' => 1,
        ]);
    }
}
