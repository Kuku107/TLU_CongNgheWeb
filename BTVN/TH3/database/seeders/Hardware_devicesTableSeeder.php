<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Hardware_devicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($center_id = 1; $center_id <= 10; $center_id++) {
            for ($i = 1; $i <= 5; $i++) {
                DB::table("hardware_devices") -> insert([
                    "device_name" => $faker->name,
                    "type" => $faker->word,
                    "status" => $faker->boolean,
                    "center_id" => $center_id
                ]);
            }
        }
    }
}
