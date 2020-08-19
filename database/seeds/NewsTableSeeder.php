<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => "Đà Nẵng Có Gì Để Chơi Tháng 7 Này?",
            'summarize' => "abccc",
            'content' => "Đà Nẵng mùa này chẳng có gì để chơi cả!",
            'image' => "images\places\danang.jpg",
            'view_number' => "12"
        ]);
    }
}
