<?php

use Illuminate\Database\Seeder;
use Spatie\OpeningHours\OpeningHours;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TableSeeder::class);
        $this->call(ExtraSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(FacilitySeeder::class);
        $this->call(PriceSeeder::class);

        $this->call(UserSeeder::class);
        $this->call(RestaurantSeeder::class);
        

        $this->call(LayoutSeeder::class);
        $this->call(RoomSeeder::class);

        $this->call(LayoutTableSeeder::class);
        $this->call(ExtraRoomSeeder::class);

        $this->call(CommentsSeeder::class);
        $this->call(FavoriteSeeder::class);
        $this->call(FacilityRestaurantSeeder::class);
        $this->call(PaymentRestaurantSeeder::class);

    }
}
