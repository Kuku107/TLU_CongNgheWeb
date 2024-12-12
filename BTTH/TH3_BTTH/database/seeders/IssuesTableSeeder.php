<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $urgencyEnum = ["Low", "medium", "High"];
        $statusEnum = ["Open", "In Progress", "Resolved"];

        for($computer_id = 1; $computer_id <= 10; $computer_id++) {
            for ($i = 1; $i <= 5; $i++) {
                DB::table("issues") -> insert([
                    "computer_id" => $computer_id,
                    "reported_by" => $faker->name,
                    "reported_date" => $faker->date,
                    "description" => $faker->paragraph,
                    "urgency" => $faker->randomElement($urgencyEnum),
                    "status" => $faker->randomElement($statusEnum)
                ]);
            }
        }
    }
}
