<?php

namespace Database\Seeders;

use App\Models\City;
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
        
             Country::create([
                'name' => 'السعوديه',
                
            
                'created_at' => now(),
                'updated_at' => now()
            ]);
            

       
    }
}
