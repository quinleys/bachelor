<?php

use Illuminate\Database\Seeder;

class ExtraRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra_room')->insert([
            'restaurant_id' => '1',
            'extra_id' => '2',
            'room_id' => '1',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '1',
            'extra_id' => '2',
            'room_id' => '2',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '2',
            'extra_id' => '2',
            'room_id' => '3',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '2',
            'extra_id' => '10',
            'room_id' => '3',
            'x' => '0',
            'y' => '200',
            'width' => '50',
            'height' => '50',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '3',
            'extra_id' => '2',
            'room_id' => '4',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '3',
            'extra_id' => '1',
            'room_id' => '4',
            'x' => '0',
            'y' => '0',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '4',
            'extra_id' => '2',
            'room_id' => '5',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '5',
            'extra_id' => '2',
            'room_id' => '6',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '5',
            'extra_id' => '2',
            'room_id' => '7',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '6',
            'extra_id' => '2',
            'room_id' => '8',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '7',
            'extra_id' => '2',
            'room_id' => '9',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '8',
            'extra_id' => '2',
            'room_id' => '10',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '9',
            'extra_id' => '2',
            'room_id' => '11',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '9',
            'extra_id' => '1',
            'room_id' => '11',
            'x' => '0',
            'y' => '0',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '10',
            'extra_id' => '2',
            'room_id' => '12',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '10',
            'extra_id' => '6',
            'room_id' => '12',
            'x' => '450',
            'y' => '950',
            'width' => '100',
            'height' => '50',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '11',
            'extra_id' => '2',
            'room_id' => '13',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '11',
            'extra_id' => '10',
            'room_id' => '13',
            'x' => '950',
            'y' => '400',
            'width' => '50',
            'height' => '50',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '12',
            'extra_id' => '2',
            'room_id' => '14',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);
        DB::table('extra_room')->insert([
            'restaurant_id' => '14',
            'extra_id' => '2',
            'room_id' => '16',
            'x' => '900',
            'y' => '900',
            'width' => '100',
            'height' => '100',

        ]);

        DB::table('extra_room')->insert([
            'restaurant_id' => '15',
            'extra_id' => '1',
            'room_id' => '17',
            'x' => '0',
            'y' => '0',
            'width' => '100',
            'height' => '100',

        ]);
    }
}
