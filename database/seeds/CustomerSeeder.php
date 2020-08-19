<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'name' => "Ho Thi On",
            'email' => "hothion1999@gmail.com",
            'phone' => "0395191247",
            'quantity'=>2
        ]);
    }
}
