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
        for($computer_id = 1; $computer_id <= 50; $computer_id++){
            for($i = 1; $i <= 2; $i++) {
                DB::table("issues") -> insert([
                    "computer_id" => $computer_id,
                    "reported_by" => $faker -> name,
                    "reported_date" => $faker -> dateTime,
                    "description" => $faker -> text,
                    "urgency" => $faker -> randomElement(["Low", "Medium", "High"]),
                    "status" => $faker -> randomElement(["Open", "In Progress", "Resolved"])
                ]);
            }
        }
    }
}
