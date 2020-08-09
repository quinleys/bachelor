<?php

use Illuminate\Database\Seeder;

class FacilityRestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 1,
            'facility_id' => 2,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 1,
            'facility_id' => 6,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 1,
            'facility_id' => 8,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 1,
            'facility_id' => 3,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 2,
            'facility_id' => 1,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 2,
            'facility_id' => 5,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 3,
            'facility_id' => 9,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 3,
            'facility_id' => 4,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 3,
            'facility_id' => 7,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 4,
            'facility_id' => 1,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 4,
            'facility_id' => 2,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 5,
            'facility_id' => 9,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 5,
            'facility_id' => 5,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 6,
            'facility_id' => 6,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 6,
            'facility_id' => 1,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 7,
            'facility_id' => 3,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 7,
            'facility_id' => 2,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 8,
            'facility_id' => 1,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 8,
            'facility_id' => 8,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 9,
            'facility_id' => 4,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 10,
            'facility_id' => 2,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 10,
            'facility_id' => 6,
        ]);
        DB::table('facility_restaurant')->insert([
            'restaurant_id' => 10,
            'facility_id' => 8,
        ]);
     
    }
}
