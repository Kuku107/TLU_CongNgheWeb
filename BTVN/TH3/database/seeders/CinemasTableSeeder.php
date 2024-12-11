<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CinemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i = 1; $i <= 10; $i++) {
            DB::table("cinemas") -> insert([
                "name" => $faker -> name,
                "location" => $faker -> address,
                "total_seats" => $faker -> numberBetween(50, 1000)
            ]);
        }
    }
}
