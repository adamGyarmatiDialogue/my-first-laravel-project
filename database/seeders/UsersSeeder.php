<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [];

        for ($i = 0; $i < 500; $i++) {
            array_push($users, [
                "first_name" => "Teszt",
                "last_name" => Str::random(25),
                "username" => "teszt." . Str::random(25),
                "email" => "teszt." . Str::random(25) . "@example.com",
                "email_verified_at" => now(),
                "password" => Hash::make("my-password-1234")
            ]);
        }

        User::insert($users);
    }
}
