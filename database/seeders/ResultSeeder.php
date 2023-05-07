<?php

namespace Database\Seeders;

use App\Models\Results;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            Results::create([
                'id_user' => random_int(1, 5),
                'id_kuis' => random_int(1, 5),
                "score" => random_int(50, 96),
            ]);
        }
    }
}
