<?php

use Illuminate\Database\Seeder;

class LayoutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layout_table')->insert([
            'layout_id' => 1,
            'restaurant_id' => 1,
            'table_id' => 2,
            "x" => 50,
            "y" => 50,
            'width' => 100,
            'height' => 100
        ]);

        DB::table('layout_table')->insert([
            'layout_id' => 1,
            'restaurant_id' => 1,
            'table_id' => 2,
            "x" => 200,
            "y" => 50,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 1,
            'restaurant_id' => 1,
            'table_id' => 4,
            "x" => 350,
            "y" => 50,
            'width' => 125,
            'height' => 100
        ]);
         DB::table('layout_table')->insert([
            'layout_id' => 1,
            'restaurant_id' => 1,
            'table_id' => 2,
            "x" => 600,
            "y" => 50,
            'width' => 100,
            'height' => 100
        ]);

        DB::table('layout_table')->insert([
            'layout_id' => 1,
            'restaurant_id' => 1,
            'table_id' => 2,
            "x" => 800,
            "y" => 50,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 1,
            'restaurant_id' => 1,
            'table_id' => 4,
            "x" => 50,
            "y" => 300,
            'width' => 125,
            'height' => 100
        ]);

        DB::table('layout_table')->insert([
            'layout_id' => 1,
            'restaurant_id' => 1,
            'table_id' => 6,
            "x" => 400,
            "y" => 300,
            'width' => 125,
            'height' => 100
        ]);

        DB::table('layout_table')->insert([
            'layout_id' => 1,
            'restaurant_id' => 1,
            'table_id' => 8,
            "x" => 400,
            "y" => 550,
            'width' => 150,
            'height' => 150
        ]);

        DB::table('layout_table')->insert([
            'layout_id' => 2,
            'restaurant_id' => 1,
            'table_id' => 8,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 2,
            'restaurant_id' => 1,
            'table_id' => 14,
            "x" => 200,
            "y" => 500,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 2,
            'restaurant_id' => 1,
            'table_id' => 4,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 2,
            'restaurant_id' => 1,
            'table_id' => 4,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 2,
            'restaurant_id' => 1,
            'table_id' => 4,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);


        DB::table('layout_table')->insert([
            'layout_id' => 3,
            'restaurant_id' => 2,
            'table_id' => 7,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 3,
            'restaurant_id' => 2,
            'table_id' => 13,
            "x" => 500,
            "y" => 200,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 3,
            'restaurant_id' => 2,
            'table_id' => 3,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 3,
            'restaurant_id' => 2,
            'table_id' => 4,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 3,
            'restaurant_id' => 2,
            'table_id' => 5,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);




        DB::table('layout_table')->insert([
            'layout_id' => 4,
            'restaurant_id' => 3,
            'table_id' => 7,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 4,
            'restaurant_id' => 3,
            'table_id' => 13,
            "x" => 500,
            "y" => 200,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 4,
            'restaurant_id' => 3,
            'table_id' => 3,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 4,
            'restaurant_id' => 3,
            'table_id' => 4,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 4,
            'restaurant_id' => 3,
            'table_id' => 5,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);







        DB::table('layout_table')->insert([
            'layout_id' => 5,
            'restaurant_id' => 4,
            'table_id' => 6,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 5,
            'restaurant_id' => 4,
            'table_id' => 13,
            "x" => 500,
            "y" => 200,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 5,
            'restaurant_id' => 4,
            'table_id' => 3,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 5,
            'restaurant_id' => 4,
            'table_id' => 4,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 5,
            'restaurant_id' => 4,
            'table_id' => 5,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);





        DB::table('layout_table')->insert([
            'layout_id' => 6,
            'restaurant_id' => 5,
            'table_id' => 15,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 6,
            'restaurant_id' => 5,
            'table_id' => 12,
            "x" => 500,
            "y" => 200,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 6,
            'restaurant_id' => 5,
            'table_id' => 2,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 6,
            'restaurant_id' => 5,
            'table_id' => 6,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 6,
            'restaurant_id' => 5,
            'table_id' => 7,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);



       DB::table('layout_table')->insert([
            'layout_id' => 7,
            'restaurant_id' => 5,
            'table_id' => 12,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 7,
            'restaurant_id' => 5,
            'table_id' => 12,
            "x" => 500,
            "y" => 200,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 7,
            'restaurant_id' => 5,
            'table_id' => 1,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 7,
            'restaurant_id' => 5,
            'table_id' => 6,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 7,
            'restaurant_id' => 5,
            'table_id' => 4,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);




        DB::table('layout_table')->insert([
            'layout_id' => 8,
            'restaurant_id' => 6,
            'table_id' => 8,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 8,
            'restaurant_id' => 6,
            'table_id' => 14,
            "x" => 500,
            "y" => 200,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 8,
            'restaurant_id' => 6,
            'table_id' => 4,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 8,
            'restaurant_id' => 6,
            'table_id' => 4,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 8,
            'restaurant_id' => 6,
            'table_id' => 4,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);









        DB::table('layout_table')->insert([
            'layout_id' => 9,
            'restaurant_id' => 7,
            'table_id' => 8,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 9,
            'restaurant_id' => 7,
            'table_id' => 14,
            "x" => 500,
            "y" => 200,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 9,
            'restaurant_id' => 7,
            'table_id' => 4,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 9,
            'restaurant_id' => 7,
            'table_id' => 4,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 9,
            'restaurant_id' => 7,
            'table_id' => 4,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);




        DB::table('layout_table')->insert([
            'layout_id' => 10,
            'restaurant_id' => 8,
            'table_id' => 8,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 10,
            'restaurant_id' => 8,
            'table_id' => 14,
            "x" => 500,
            "y" => 200,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 10,
            'restaurant_id' => 8,
            'table_id' => 4,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 10,
            'restaurant_id' => 8,
            'table_id' => 4,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 10,
            'restaurant_id' => 8,
            'table_id' => 4,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);







       DB::table('layout_table')->insert([
            'layout_id' => 11,
            'restaurant_id' => 9,
            'table_id' => 8,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 11,
            'restaurant_id' => 9,
            'table_id' => 14,
            "x" => 200,
            "y" => 500,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 11,
            'restaurant_id' => 9,
            'table_id' => 4,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 11,
            'restaurant_id' => 9,
            'table_id' => 4,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 11,
            'restaurant_id' => 9,
            'table_id' => 4,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);





        DB::table('layout_table')->insert([
            'layout_id' => 12,
            'restaurant_id' => 10,
            'table_id' => 8,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 12,
            'restaurant_id' => 10,
            'table_id' => 14,
            "x" => 500,
            "y" => 200,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 12,
            'restaurant_id' => 10,
            'table_id' => 4,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 12,
            'restaurant_id' => 10,
            'table_id' => 4,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 12,
            'restaurant_id' => 10,
            'table_id' => 4,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);









        DB::table('layout_table')->insert([
            'layout_id' => 13,
            'restaurant_id' => 11,
            'table_id' => 8,
            "x" => 500,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 13,
            'restaurant_id' => 11,
            'table_id' => 14,
            "x" => 200,
            "y" => 500,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 13,
            'restaurant_id' => 11,
            'table_id' => 4,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 13,
            'restaurant_id' => 11,
            'table_id' => 4,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 13,
            'restaurant_id' => 11,
            'table_id' => 4,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);






        DB::table('layout_table')->insert([
            'layout_id' => 14,
            'restaurant_id' => 12,
            'table_id' => 8,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 14,
            'restaurant_id' => 12,
            'table_id' => 14,
            "x" => 500,
            "y" => 200,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 14,
            'restaurant_id' => 12,
            'table_id' => 4,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 14,
            'restaurant_id' => 12,
            'table_id' => 4,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 14,
            'restaurant_id' => 12,
            'table_id' => 4,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);





        DB::table('layout_table')->insert([
            'layout_id' => 15,
            'restaurant_id' => 13,
            'table_id' => 8,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 15,
            'restaurant_id' => 13,
            'table_id' => 14,
            "x" => 500,
            "y" => 200,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 15,
            'restaurant_id' => 13,
            'table_id' => 4,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 15,
            'restaurant_id' => 13,
            'table_id' => 4,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 15,
            'restaurant_id' => 13,
            'table_id' => 4,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);







        DB::table('layout_table')->insert([
            'layout_id' => 16,
            'restaurant_id' => 14,
            'table_id' => 8,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 16,
            'restaurant_id' => 14,
            'table_id' => 14,
            "x" => 500,
            "y" => 200,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 16,
            'restaurant_id' => 14,
            'table_id' => 4,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 16,
            'restaurant_id' => 14,
            'table_id' => 4,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 16,
            'restaurant_id' => 14,
            'table_id' => 4,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);








        DB::table('layout_table')->insert([
            'layout_id' => 17,
            'restaurant_id' => 15,
            'table_id' => 8,
            "x" => 200,
            "y" => 200,
            'width' => 200,
            'height' => 200
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 17,
            'restaurant_id' => 15,
            'table_id' => 14,
            "x" => 500,
            "y" => 200,
            'width' => 150,
            'height' => 150
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 17,
            'restaurant_id' => 15,
            'table_id' => 4,
            "x" => 200,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 17,
            'restaurant_id' => 15,
            'table_id' => 4,
            "x" => 400,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]);
        DB::table('layout_table')->insert([
            'layout_id' => 17,
            'restaurant_id' => 15,
            'table_id' => 4,
            "x" => 600,
            "y" => 650,
            'width' => 100,
            'height' => 100
        ]); 
    }
}
