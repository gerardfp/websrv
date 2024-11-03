<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user_a = User::factory()->create(["name" => "Anand Amatal", "email" => "a@a.com", "password" => "a"]);
        $user_e = User::factory()->create(["name" => "Enrnest Emersen", "email" => "e@e.com", "password" => "e"]);
        $user_i = User::factory()->create(["name" => "Iwiti Inguiri", "email" => "i@i.com", "password" => "i"]);
        $user_o = User::factory()->create(["name" => "Olsov Obrosko", "email" => "o@o.com", "password" => "o"]);
        $user_u = User::factory()->create(["name" => "Utuku Umutu", "email" => "u@u.com", "password" => "u"]);
    }
}
