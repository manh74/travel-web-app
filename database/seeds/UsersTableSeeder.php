<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Nguyen Manh",
            'email' => "nguyenchoqt@gmail.com",
            'is_admin' => 1,
            'password' => "manh1234"
        ]);
    }
}
