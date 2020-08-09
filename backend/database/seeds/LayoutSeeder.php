<?php

use Illuminate\Database\Seeder;

class LayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layouts')->insert([
            'title' => 'Layout 1',
            'restaurant_id' => 1,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout 2',
            'restaurant_id' => 1,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 2,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 3,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 4,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 5,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 5,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 6,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 7,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 8,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 9,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 10,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 11,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 12,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 13,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 14,
        ]);
        DB::table('layouts')->insert([
            'title' => 'Layout',
            'restaurant_id' => 15,
        ]);

    }
}
