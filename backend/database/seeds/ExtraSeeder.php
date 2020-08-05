<?php

use Illuminate\Database\Seeder;

class ExtraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extras')->insert([
            'title' => 'WC',
        ]);
        DB::table('extras')->insert([
            'title' => 'Trappen',
        ]);
        DB::table('extras')->insert([
            'title' => 'Raam',
        ]);
        DB::table('extras')->insert([
            'title' => 'Keuken',
        ]);
        DB::table('extras')->insert([
            'title' => 'Ingang',
        ]);
        DB::table('extras')->insert([
            'title' => 'Schilderij',
        ]);
        DB::table('extras')->insert([
            'title' => 'Uitzicht',
        ]);
    }
}
