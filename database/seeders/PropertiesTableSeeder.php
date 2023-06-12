<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    function run()
    {  //------------------------------------------------------------------------------------- 0
        $property = [
            'views' => rand(1, 399),
            'name' => 'منزل الانوار',
            'picture' => 'property/a.png',
            'country' => 'دبي',
            'status' => '1',
            'catogerie_id' => 1,
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),
            'Rental_term' => 'شهري',
            
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'سكني',
            'property_direction' => 'جنوبي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',
            
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);

        $property_images = [        
          [
            'property_id' => $property_id,
            'image_path' => 'property/a.png',

          ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //------------------------------------------------------------------------------------- 1





        $property = [
            'views' => rand(1, 399),
            'name' => 'منزل محمد علي',
            'picture' => 'property/b.png',
            'country' => 'دبي',
            'status' => '1',
            'catogerie_id' => 1,
            'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),
            
            'Rental_term' => 'سنوي',
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'سكني',
            'property_direction' => 'شرقي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',
            
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);

        $property_images = [    
            [
                'property_id' => $property_id,
                'image_path' => 'property/b.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //-------------------------------------------------------------------------------------  2



        $property = [
            'views' => rand(1, 399),
            'name' => 'منزل الخليفه',
            'picture' => 'property/c.png',
            'country' => 'دبي',
            'status' => '1',
            'catogerie_id' => 1,
            'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),
            
            'Rental_term' => 'للبيع',
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'سكني',
            'property_direction' => 'جنوبي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);

        $property_images = [            [
            'property_id' => $property_id,
            'image_path' => 'property/c.png',

        ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //-------------------------------------------------------------------------------------3



        $property = [
            'views' => rand(1, 399),
            'name' => 'منزل ابن الواليد',
            'picture' => 'property/d.png',
            'country' => 'دبي',
            'status' => '1',
            'catogerie_id' => 1,
            'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),
            
            'Rental_term' => 'يومي',
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'سكني',
            'property_direction' => 'جنوبي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',            
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);

        $property_images = [          
              [
            'property_id' => $property_id,
            'image_path' => 'property/d.png',

           ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [            
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //-------------------------------------------------------------------------------------4



        $property = [
            'views' => rand(1, 399),
            'name' => 'شاليه يوسف اوباما',
            'picture' => 'property/e.png',
            'country' => 'ابوظبي',
            'status' => '1',
            'catogerie_id' => 2,
            'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),
            
            'Rental_term' => 'سنوي',
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'سكني',
            'property_direction' => 'غربي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',
            
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);

        $property_images = [            [
            'property_id' => $property_id,
            'image_path' => 'property/e.png',

        ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //-------------------------------------------------------------------------------------5



        $property = [
            'views' => rand(1, 399),
            'name' => 'شاليه زياد احمد',
            'picture' => 'property/f.png',
            'country' => 'ابوظبي',
            'status' => '1',
            'catogerie_id' => 2,
            'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),
            
            'Rental_term' => 'شهري',
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'تجاري',
            'property_direction' => 'جنوبي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',
            
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);

        $property_images = [            [
            'property_id' => $property_id,
            'image_path' => 'property/f.png',

        ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //-------------------------------------------------------------------------------------6



        $property = [
            'views' => rand(1, 399),
            'name' => 'فندق احمد مفتاح الاول',
            'picture' => 'property/g.png',
            'country' => 'ابوظبي',
            'status' => '1',
            'catogerie_id' => 3,
            'user_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),
            
            'Rental_term' => 'للبيع',
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'سكني',
            'property_direction' => 'غربي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',
            
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);

        $property_images = [            [
            'property_id' => $property_id,
            'image_path' => 'property/g.png',

        ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //-------------------------------------------------------------------------------------7



        $property = [
            'views' => rand(1, 399),
            'name' => 'فندق العجمي السابع',
            'picture' => 'property/h.png',
            'country' => 'عجمان',
            'status' => '1',
            'catogerie_id' => 3,
            'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),           
            'Rental_term' => 'للبيع',
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'تجاري',
            'property_direction' => 'شمالي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',          
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);

        $property_images = [            [
            'property_id' => $property_id,
            'image_path' => 'property/h.png',

        ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //-------------------------------------------------------------------------------------8



        $property = [
            'views' => rand(1, 399),
            'name' => 'فله محمدالانوار',
            'picture' => 'property/o.png',
            'country' => 'الشارقه',
            'status' => '1',
            'catogerie_id' => 4,
            'user_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),
            
            'Rental_term' => 'سنوي',
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'تجاري',
            'property_direction' => 'شمالي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',
            
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);

        $property_images = [            [
            'property_id' => $property_id,
            'image_path' => 'property/o.png',

        ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //-------------------------------------------------------------------------------------9



        $property = [
            'views' => rand(1, 399),
            'name' => 'فله اليوسفي',
            'picture' => 'property/x.png',
            'country' => 'عجمان',
            'status' => '1',
            'catogerie_id' => 4,
            'user_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),
            
            'Rental_term' => 'للبيع',
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'تجاري',
            'property_direction' => 'شمالي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',
            
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);

        $property_images = [            [
            'property_id' => $property_id,
            'image_path' => 'property/x.png',

        ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //-------------------------------------------------------------------------------------10



        $property = [
            'views' => rand(1, 399),
            'name' => 'فله مجدي محمد',
            'picture' => 'property/y.png',
            'country' => 'عجمان',
            'status' => '1',
            'catogerie_id' => 4,
            'user_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),
            
            'Rental_term' => 'يومي',
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'سكني',
            'property_direction' => 'غربي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',
            
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);

        $property_images = [            [
            'property_id' => $property_id,
            'image_path' => 'property/y.png',

        ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //-------------------------------------------------------------------------------------11



        $property = [
            'views' => rand(1, 399),
            'name' => 'فله المحمدي',
            'picture' => 'property/z.png',
            'country' => 'الشارقه',
            'status' => '1',
            'catogerie_id' => 4,
            'user_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),
            
            'Rental_term' => 'يومي',
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'سكني',
            'property_direction' => 'شمالي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',
            
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);

        $property_images = [    [
            'property_id' => $property_id,
            'image_path' => 'property/z.png',

        ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [        
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //-------------------------------------------------------------------------------------12



        $property = [
            'views' => rand(1, 399),
            'name' => 'منزل العمده محمد',
            'picture' => 'property/r.png',
            'country' => 'عجمان',
            'status' => '1',
            'catogerie_id' => 1,
            'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),
            
            'Rental_term' => 'للبيع',
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'سكني',
            'property_direction' => 'شرقي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',
            
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);

        $property_images = [            [
            'property_id' => $property_id,
            'image_path' => 'property/r.png',

        ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //-------------------------------------------------------------------------------------13



        $property = [
            'views' => rand(1, 399),
            'name' => 'فندق المنصوره',
            'picture' => 'property/w.png',
            'country' => 'الشارقه',
            'status' => '1',
            'catogerie_id' => 3,
            'user_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),
            
            'Rental_term' => 'شهري',
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'سكني',
            'property_direction' => 'جنوبي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',
            
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);


        $property_images = [
            [
                'property_id' => $property_id,
                'image_path' => 'property/w.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //-------------------------------------------------------------------------------------14



        $property = [
            'views' => rand(1, 399),
            'name' => 'شاليه وليد سليمان',
            'picture' => 'property/i.png',
            'country' => 'الشارقه',
            'status' => '1',
            'catogerie_id' => 2,
            'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
        ];

        $property_id = DB::table('properties')->insertGetId($property);

        $property_details = [
            
            'price' => rand(1, 1000),
            
            'Rental_term' => 'سنوي',
            'description' => 'عند اضافة وصف سيظهر هنا',
            'space' => rand(1, 999),
            'building_type' => 'تجاري',
            'property_direction' => 'غربي',
            'numbeer_room' => rand(1, 10),
            'numbeer_toilet' => rand(1, 10),
            'longitude' => '55.296249',
            'latitude' => '25.276987',
            'address' => 'دبي مول وبجوار برج خليفة',
            
            'seller_phone' => '555-555-5555',

            'property_id' => $property_id,
        ];

        DB::table('property_detalis')->insert($property_details);

        $property_images = [            [ 
      
            'property_id' => $property_id,
            'image_path' => 'property/i.png',

        ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/aa.png',

            ],
            [
                'property_id' => $property_id,
                'image_path' => 'property/bb.png',

            ],  
              [
                'property_id' => $property_id,
                'image_path' => 'property/cc.png',

            ],
        ];

        DB::table('images')->insert($property_images);

        $property_facilities = [
            [
                'property_id' => $property_id,
                'facility' => 'مكيفات',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'مدخل خاص',

            ],
            [
                'property_id' => $property_id,
                'facility' => 'انترنت',

            ],
        ];
        DB::table('facilities')->insert($property_facilities);




        //-------------------------------------------------------------------------------------









    }
}
