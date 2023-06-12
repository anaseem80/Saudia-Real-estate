<?php

namespace Database\Seeders;

use App\Models\Catogery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatogerysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
             Catogery::create([
                'name' => 'منازل',
                'Created_by' => 'محمود محمد',
                'image_path' => 'catogery/1.png',
                'created_at' => now(),
                'updated_at' => now()
            ]);

            Catogery::create([
                'name' => 'شاليهات',
                'Created_by' => 'محمود محمد',
                'image_path' => 'catogery/2.png',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        

            Catogery::create([
                'name' => 'فنادق',
                'Created_by' => 'محمود محمد',
                'image_path' => 'catogery/3.png',
                'created_at' => now(),
                'updated_at' => now()
            ]);

            Catogery::create([
                'name' => 'فلل',
                'Created_by' => 'محمود محمد',
                'image_path' => 'catogery/4.png',
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}
