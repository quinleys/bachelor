<?php

use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prices')->insert([
            'title' => 'Goedkoop',
            'price' => 1,
            'description' => 'Goedkoop',
        ]);
        DB::table('prices')->insert([
            'title' => 'Gemiddeld',
            'price' => 2,
            'description' => 'Gemiddeld',
        ]);
        DB::table('prices')->insert([
            'title' => 'Duur',
            'price' => 3,
            'description' => 'Duur',
        ]);
    }
}
