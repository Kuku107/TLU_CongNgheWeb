<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $grade_level = ["Pre-K", "Kindergarten"];

        for ($i = 1; $i <= 10; $i++) {
            DB::table("classes") -> insert([
                "grade_level" => $faker -> randomElement($grade_level),
                "room_number" => $faker -> numberBetween(1, 10) . $faker->word
            ]);
        }
    }
}
