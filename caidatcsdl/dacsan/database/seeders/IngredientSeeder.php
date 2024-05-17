<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Ingredient;
class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<20; $i++){
            Ingredient::create([
                'ten_nguyen_lieu' => $faker->sentence(3,true),
                'mon_an_id' => $faker->randomElement([4,6])
            ]);
        }
    }
}
