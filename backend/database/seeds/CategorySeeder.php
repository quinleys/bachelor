<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Chinees',
            'description' => 'Chinees eten',
        ]);

        DB::table('categories')->insert([
            'title' => 'Aziatisch',
            'description' => 'Aziatisch eten',
        ]);

        DB::table('categories')->insert([
            'title' => 'Frans/Belgisch',
            'description' => 'Frans en belgisch eten',
        ]);

        DB::table('categories')->insert([
            'title' => 'Spaans',
            'description' => 'Spaans eten',
        ]);

        DB::table('categories')->insert([
            'title' => 'Mexicaans',
            'description' => 'Mexicaans eten',
        ]);
        DB::table('categories')->insert([
            'title' => 'Grieks',
            'description' => 'Grieks eten',
        ]);
        DB::table('categories')->insert([
            'title' => 'Afrikaans',
            'description' => 'Afrikaans eten',
        ]);
        DB::table('categories')->insert([
            'title' => 'Zuid-Amerikaans',
            'description' => 'Amerikaans eten',
        ]);
        DB::table('categories')->insert([
            'title' => 'Noord-Amerikaans',
            'description' => 'Amerikaans eten',
        ]);
        DB::table('categories')->insert([
            'title' => 'Amerikaans',
            'description' => 'Amerikaans eten',
        ]);
        DB::table('categories')->insert([
            'title' => 'Fast-food',
            'description' => 'fast-food eten',
        ]);
        DB::table('categories')->insert([
            'title' => 'Mediterraans',
            'description' => 'Mediterraans eten',
        ]);
        DB::table('categories')->insert([
            'title' => 'Indisch',
            'description' => 'Indisch eten',
        ]);
        DB::table('categories')->insert([
            'title' => 'Vegetarisch',
            'description' => 'Vegetarisch eten',
        ]);
        DB::table('categories')->insert([
            'title' => 'Veganistisch',
            'description' => 'Veganistisch eten',
        ]);
        DB::table('categories')->insert([
            'title' => 'Japans',
            'description' => 'Japans eten',
        ]);
        DB::table('categories')->insert([
            'title' => 'Andere',
            'description' => 'Ander eten',
        ]);
    }
}
