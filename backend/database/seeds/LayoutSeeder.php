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
            'restaurant_id' => '1',
        ]);
    }
}
