<?php

namespace Database\Seeders;

use App\Models\Kuis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Cocur\Slugify\Slugify;

class KuisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");
        $slugify = new Slugify();

        for ($i = 0; $i < 5; $i++) {
            $title = $faker->sentence(random_int(4, 8));
            Kuis::create([
                "title" => $title,
                "slug" => $slugify->slugify($title),
                "description" => $faker->sentence(random_int(20, 50)),
                "status" => 1,
            ]);
        }
    }
}
