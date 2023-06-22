<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Comment;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        for ($i = 0; $i < 50; $i++) {
            Comment::create([

                'user_id' => rand(1, 10),
                'property_id' => rand(1, 14),
                'content' => 'hi man ' . rand(1, 1000),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

    }
}