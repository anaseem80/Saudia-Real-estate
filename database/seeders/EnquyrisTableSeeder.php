<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnquyrisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'محمد محمود',
                
                'description' => 'Egypt',
          
                'userphone' => '123456789',
                
                'useremail' => 'user1@example.com','property_id' =>  rand(1, 10),

            ],
            
            [
                'username' => 'يوسف محمود',
                'description' => 'Saudi Arabia',
          
                'userphone' => '123456789',
                
                'useremail' => 'user2@gmail.com','property_id' =>  rand(1, 10),

            ],
            
            [
                'username' => 'زياد خالد',
                'description' => 'Qatar',
          
                'userphone' => '123456789',
                
                'useremail' => 'user3@gmail.com','property_id' =>  rand(1, 10),

            ],
            
            [
                'username' => 'يوسف المصري',
                'description' => 'Qatar',
          
                'userphone' => '123456789',
                
                'useremail' => 'user4@gmail.com','property_id' =>  rand(1, 10),

            ],
            
            [
                'username' => 'احمد نجيب',
                'description' => 'United Arab Emirates',
          
                'userphone' => '123456789',
                
                'useremail' => 'user5@gmail.com','property_id' =>  rand(1, 10),

            ],
            
            [
                'username' => 'مجدي افشه',
                'description' => 'United Arab Emirates',
          
                'userphone' => '123456789',
                
                'useremail' => 'user6@gmail.com','property_id' =>  rand(1, 10),

            ],
            
            [
                'username' => 'محمد الشناوي',
                'description' => 'United Arab Emirates',
          
                'userphone' => '123456789',
                
                'useremail' => 'user7@gmail.com','property_id' =>  rand(1, 10),

            ],
            [
                'username' => 'اكرم توفيق',
                'description' => 'United Arab Emirates',
          
                'userphone' => '123456789',
                
                'useremail' => 'user8@gmail.com','property_id' =>  rand(1, 10),

            ],
            [
                'username' => 'محمد زيدان',
                'description' => 'Tunisia',
          
                'userphone' => '123456789',
                
                'useremail' => 'user9@gmail.com','property_id' =>  rand(1, 10),

            ],
            [
                'username' => 'كرم نعيم',
                'description' => 'Egypt',
          
                'userphone' => '123456789',
                
                'useremail' => 'user10@gmail.com','property_id' =>  rand(1, 10),

            ],
                        ];
                        DB::table('enquiries')->insert($user);
    }
}
