<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($librariesId = 1; $librariesId <= 15; $librariesId++) {
            for($i = 1; $i <= 5; $i++) {
                DB::table("books")->insert([
                    "title" => $faker->sentence(3),
                    "author" => $faker->name,
                    "publication_year" => $faker->year,
                    "genre" => $faker->word,
                    "library_id" => $librariesId
                ]);
            }
        }
    }
}
