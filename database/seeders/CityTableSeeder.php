<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        City::create([
            'name' => 'الرياض',

            'country_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        City::create([
            'name' => 'جده',
            'country_id' => 1,

            'created_at' => now(),
            'updated_at' => now()
        ]);
        City::create([
            'name' => 'الدمام',


            'country_id' => 1,
            'created_at' => now(),


            'updated_at' => now()
        ]);
        City::create([
            'name' => 'مكة',

            'country_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        City::create([
            'name' => 'الطائف',

            'country_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        City::create([
            'name' => 'الشرقية',
            'country_id' => 1,

            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
