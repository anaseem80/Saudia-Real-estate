<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Rating;
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




        Rating::create([

            'user_id' => 1,
            'property_id' => rand(1, 14),

            'created_at' => now(),
            'updated_at' => now()
        ]);
        Rating::create([

            'user_id' => 2,
            'property_id' => rand(1, 14),

            'created_at' => now(),
            'updated_at' => now()
        ]);
        Rating::create([

            'user_id' => 3,
            'property_id' => rand(1, 14),

            'created_at' => now(),
            'updated_at' => now()
        ]);
        Rating::create([

            'user_id' => 4,
            'property_id' => rand(1, 14),

            'created_at' => now(),
            'updated_at' => now()
        ]);
        Rating::create([

            'user_id' => 5,
            'property_id' => rand(1, 14),

            'created_at' => now(),
            'updated_at' => now()
        ]);
        Rating::create([

            'user_id' => 7,
            'property_id' => rand(1, 14),

            'created_at' => now(),
            'updated_at' => now()
        ]);
        Rating::create([

            'user_id' => 8,
            'property_id' => rand(1, 14),

            'created_at' => now(),
            'updated_at' => now()
        ]);
        Rating::create([

            'user_id' => 9,
            'property_id' => rand(1, 14),

            'created_at' => now(),
            'updated_at' => now()
        ]);
        Rating::create([

            'user_id' => 6,
            'property_id' => rand(1, 14),

            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
