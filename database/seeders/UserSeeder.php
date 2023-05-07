<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");

        for ($i = 0; $i <= 10; $i++) {
            User::create([
                "nama" => $faker->name(),
                "username" => $faker->userName(),
                "password" => password_hash("123456", PASSWORD_BCRYPT),
                "email" => $faker->safeEmail(),
            ]);
        }
    }
}
