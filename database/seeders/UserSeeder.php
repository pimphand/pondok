<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "admin",
            "username" => "admin",
            "role" => 0,
            "email"=> "admin@gmail.com",
            "status"=> true,
            "password"=> Hash::make("admin"),
        ]);

        User::create([
            "name" => "user",
            "username" => "user",
            "role" => 1,
            "email"=> "user@gmail.com",
            "status"=> true,
            "password"=> Hash::make("user"),
        ]);
    }
}
