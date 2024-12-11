<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($cinema_id = 1; $cinema_id <= 10; $cinema_id++) {
            for ($i = 1; $i <= 5; $i++) {
                DB::table("movies") -> insert([
                    "title" => $faker -> sentence(5),
                    "director" => $faker -> name,
                    "release_date" => $faker -> date,
                    "duration" => $faker -> numberBetween(60, 180),
                    "cinema_id" => $cinema_id
                ]);
            }
        }
    }
}
