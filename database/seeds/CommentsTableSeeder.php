<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'idUser' => 1,
            'idNews' => 1,
            'content' => "Bài đăng hay!"
        ]);

        DB::table('comments')->insert([
            'idUser' => 2,
            'idNews' => 1,
            'content' => "Bài đăng hay đấy!"
        ]);
    }
}
