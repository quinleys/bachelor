<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            'title' => 'Visa',
            'description' => 'Visa',
        ]);
        DB::table('payments')->insert([
            'title' => 'Cash',
            'description' => 'Cash',
        ]);
        DB::table('payments')->insert([
            'title' => 'Payconiq',
            'description' => 'Payconiq',
        ]);
        DB::table('payments')->insert([
            'title' => 'Apple Pay',
            'description' => 'Apple Pay',
        ]);
        DB::table('payments')->insert([
            'title' => 'Bancontact',
            'description' => 'Bancontact',
        ]);
        DB::table('payments')->insert([
            'title' => 'Mastercard',
            'description' => 'Mastercard',
        ]);
        DB::table('payments')->insert([
            'title' => 'Maestro',
            'description' => 'Maestro',
        ]);
        DB::table('payments')->insert([
            'title' => 'Paypal',
            'description' => 'Paypal',
        ]);
    }
}
