<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Food;
class FoodSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 5; $i++) {
            Food::create([
                'name' => $faker->sentence(3, true),
                'price' => $faker->randomFloat(2, 0, 100),
                'unit' => $faker->sentence(1, true),
                'description' => $faker->paragraph(3),
                'id_category' => $faker->randomElement([1, 2, 3, 4, 5]),
            ]);
        }
    }

}
