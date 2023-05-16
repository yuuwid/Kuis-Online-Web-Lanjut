<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'nama' => "Admin",
            'email' => "admin@test.com",
            'password' => password_hash('123456', PASSWORD_BCRYPT)
        ]);

        Admin::create([
            'nama' => "Admin",
            'email' => "admin",
            'password' => password_hash('123456', PASSWORD_BCRYPT)
        ]);
    }
}
