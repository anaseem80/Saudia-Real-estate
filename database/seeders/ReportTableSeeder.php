<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportTableSeeder extends Seeder
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
                'username' => 'حسن محمود',
                
                'description' => 'Egypt',
          
                'userphone' => '123456789',
                
                'useremail' => 'user1@example.com','property_id' =>  rand(1, 10),

            ],
            
            [
                'username' => 'مفتاح محمود',
                'description' => 'Saudi Arabia',
          
                'userphone' => '123456789',
                
                'useremail' => 'user2@gmail.com','property_id' =>  rand(1, 10),

            ],
            
            [
                'username' => 'مهند خالد',
                'description' => 'Qatar',
          
                'userphone' => '123456789',
                
                'useremail' => 'user3@gmail.com','property_id' =>  rand(1, 10),

            ],
            
            [
                'username' => 'محروس المصري',
                'description' => 'Qatar',
          
                'userphone' => '123456789',
                
                'useremail' => 'user4@gmail.com','property_id' =>  rand(1, 10),

            ],
            
            [
                'username' => 'الخولي نجيب',
                'description' => 'United Arab Emirates',
          
                'userphone' => '123456789',
                
                'useremail' => 'user5@gmail.com','property_id' =>  rand(1, 10),

            ],
            
            [
                'username' => 'ابو تريكه محمد',
                'description' => 'United Arab Emirates',
          
                'userphone' => '123456789',
                
                'useremail' => 'user6@gmail.com','property_id' =>  rand(1, 10),

            ],
            
            [
                'username' => 'احمد الشناوي',
                'description' => 'United Arab Emirates',
          
                'userphone' => '123456789',
                
                'useremail' => 'user7@gmail.com','property_id' =>  rand(1, 10),

            ],
            [
                'username' => ' كريستيانو لاونالدو',
                'description' => 'United Arab Emirates',
          
                'userphone' => '123456789',
                
                'useremail' => 'user8@gmail.com','property_id' =>  rand(1, 10),

            ],
            [
                'username' => 'فارس دياب',
                'description' => 'Tunisia',
          
                'userphone' => '123456789',
                
                'useremail' => 'user9@gmail.com','property_id' =>  rand(1, 10),

            ],
            [
                'username' => 'يوسف مجدي',
                'description' => 'Egypt',
          
                'userphone' => '123456789',
                
                'useremail' => 'user10@gmail.com','property_id' =>  rand(1, 10),

            ],
                        ];
                        DB::table('reports')->insert($user);
    }
    }

