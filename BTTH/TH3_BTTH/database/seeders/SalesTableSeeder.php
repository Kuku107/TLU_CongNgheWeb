<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($medicine_id = 1; $medicine_id <= 10; $medicine_id++) {
            DB::table("sales") -> insert([
               "medicine_id" => $medicine_id,
               "quantity" => $faker -> numberBetween(500, 1000000),
               "sale_date" => $faker -> dateTime,
               "customer_phone" => $faker -> phoneNumber
            ]);
        }
    }
}
