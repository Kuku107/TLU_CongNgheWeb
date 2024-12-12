<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($class_id = 1; $class_id <= 10; $class_id++) {
            for ($i = 1; $i <= 10; $i++) {
                DB::table("students") -> insert([
                    "first_name" => $faker->firstName,
                    "last_name" => $faker->lastName,
                    "date_of_birth" => $faker->date,
                    "parent_phone" => $faker->phoneNumber,
                    "class_id" => $class_id
                ]);
            }
        }
    }
}
