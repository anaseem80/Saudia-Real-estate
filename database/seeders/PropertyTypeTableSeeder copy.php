<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use App\Models\PropertyType;
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
        
             PropertyType::create([
                'title' => 'تاجير',
          
                'created_at' => now(),
                'updated_at' => now()
            ]);
            

            PropertyType::create([
                'title' => 'بيع',
          
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
    }
}
