<?php

use Illuminate\Database\Seeder;

class TypeToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_tours')->insert([
            'name' => "Tour Giá Rẻ"
        ]);
        DB::table('type_tours')->insert([
            'name' => "Tour Nổi Bật"
        ]);
        DB::table('type_tours')->insert([
            'name' => "Tour Khuyến Mãi"
        ]);
        DB::table('type_tours')->insert([
            'name' => "Tour Trăng Mật"
        ]);
        DB::table('type_tours')->insert([
            'name' => "Tour Gia Đình"
        ]);
    }
}
