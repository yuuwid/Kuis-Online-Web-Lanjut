<?php

namespace Database\Seeders;

use App\Models\Soal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");

        for ($i = 0; $i < 50; $i++) {
            Soal::create([
                'id_kuis' => random_int(1, 5),
                'pertanyaan' => $faker->sentence(random_int(10, 20)),
                'poin' => 100,
            ]);
        }
    }
}
