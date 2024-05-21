<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Image;
class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<20;$i++){
            Image::create([
                'image' => $faker->imageUrl(360, 360, 'animals', true, 'cats'),
                'id_food' => $faker->randomElement([1,2,3,4,5])
            ]);
        }
    }
}
