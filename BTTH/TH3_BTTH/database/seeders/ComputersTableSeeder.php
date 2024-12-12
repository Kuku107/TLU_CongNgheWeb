<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 1; $i <= 10; $i++) {
            DB::table("computers") -> insert([
                "computer_name" => $faker->name,
                "model" => $faker->sentence(3),
                "operating_system" => $faker->sentence(4),
                "processor" => $faker->sentence(2),
                "memory" => $faker->randomElement([8, 16, 32, 64, 128]),
                "available" => $faker -> boolean
            ]);
        }
    }
}
