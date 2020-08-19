<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'address' => "99 Tô Hiến Thành, Sơn Trà, Đà Nẵng",
            'phone_number' => "0366 908 087",
            'working_date' => "Thứ 2 - Thứ 6, 8:00-22:00",
            'email' => "vnenjoytravel@gmail.com",
            'url' => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.0769458726827!2d108.24078887020062!3d16.06054664668701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177f2ced6d8b%3A0xeac35f2960ca74a4!2zOTkgVMO0IEhp4bq_biBUaMOgbmgsIFBoxrDhu5tjIE3hu7ksIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1595562304035!5m2!1svi!2s"
        ]);
    }
}
