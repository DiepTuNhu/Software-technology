<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\ServiceLocation;
use App\Models\ServicePoint;

class ServicePointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<20; $i++){
            ServicePoint::create([
                'name' => $faker->sentence(3),
                'description' => $faker->paragraph(3),
                'address' => $faker->paragraph(3),
                'open_time' => $faker->time('H:i'),
                'close_time' => $faker->time('H:i'),
                'id_food' => $faker->randomElement([1,2,3,4,5]),
                'image' => $faker->imageUrl(360, 360, 'animals', true, 'cats'),
                'phone' => $faker->phoneNumber()
            ]);
        }
    }
}
