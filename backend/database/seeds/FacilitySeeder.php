<?php

use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facilities')->insert([
            'title' => 'Honden toegelaten',
            'description' => 'Honden toegelaten',
        ]);
        DB::table('facilities')->insert([
            'title' => 'Andersvaliden optimalisatie',
            'description' => 'Andersvaliden optimalisatie',
        ]);
        DB::table('facilities')->insert([
            'title' => 'Open keuken',
            'description' => 'Open keuken',
        ]);
        DB::table('facilities')->insert([
            'title' => 'Kunst',
            'description' => 'Kunst',
        ]);
        DB::table('facilities')->insert([
            'title' => 'WiFi',
            'description' => 'WiFi',
        ]);
        DB::table('facilities')->insert([
            'title' => 'Kinderspeeltuin',
            'description' => 'Kinderspeeltuin',
        ]);
        DB::table('facilities')->insert([
            'title' => 'Terras',
            'description' => 'Terras',
        ]);
        DB::table('facilities')->insert([
            'title' => 'Laadpaal Auto',
            'description' => 'Laadpaal Auto',
        ]);
        DB::table('facilities')->insert([
            'title' => 'Laadpaal Fiets',
            'description' => 'Laadpaal Fiets',
        ]);
    }
}
