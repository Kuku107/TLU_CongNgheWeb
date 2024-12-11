<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LaptopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($renter_id = 1; $renter_id <= 10; $renter_id++) {
            for ($i = 1; $i <= 5; $i++) {
                DB::table("laptops") -> insert([
                    "brand" => $faker -> word,
                    "model" => $faker -> sentence(3),
                    "specifications" => $faker -> paragraph,
                    "rental_status" => $faker -> boolean,
                    "renter_id" => $renter_id
                ]);
            }
        }
    }
}
