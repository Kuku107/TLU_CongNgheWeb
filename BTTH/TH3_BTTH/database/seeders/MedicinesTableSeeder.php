<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MedicinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            DB::table("medicines") -> insert([
                "name" => $faker -> name,
                "brand" => $faker -> word,
                "dosage" => $faker -> word,
                "form" => $faker -> sentence(2),
                "price" => $faker -> randomFloat(2, 2, 100),
                "stock" => $faker -> numberBetween(1, 10)
            ]);
        }
    }
}
