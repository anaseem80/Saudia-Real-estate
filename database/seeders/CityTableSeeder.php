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
           'name' => 'ابوظبي',
           
           'country_id' => 1,
           'created_at' => now(),
           'updated_at' => now()
       ]);
       City::create([
           'name' => 'دبي',
           'country_id' => 1,
       
           'created_at' => now(),
           'updated_at' => now()
       ]);             
       City::create([
           'name' => 'الشارقه',


           'country_id' => 1,
           'created_at' => now(),
       
           
           'updated_at' => now()
       ]);            
        City::create([
           'name' => 'العين',
           
           'country_id' => 1,
           'created_at' => now(),
           'updated_at' => now()
       ]);  
       City::create([
        'name' => 'عجمان',
        
        'country_id' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ]);           
       City::create([
           'name' => 'الرويس',
           'country_id' => 1,
       
           'created_at' => now(),
           'updated_at' => now()
       ]);

  
}
}
