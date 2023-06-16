<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
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

                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'office',
                'name' => 'محمد محمود',
                'country' => 'Egypt',
                'city' => 'الرياض',

                'user_type' => 'user',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',

                'email' => 'user1@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => 'يوسف محمود',
                'country' => 'Saudi Arabia',
                'city' => 'الرياض',
                'user_type' => 'user',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',
                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'office',
                'email' => 'user2@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => 'زياد خالد',
                'country' => 'Qatar',
                'city' => 'الرياض',
                'user_type' => 'user',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',
                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'office',
                'email' => 'user3@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => 'يوسف المصري',
                'country' => 'Qatar',
                'city' => 'الرياض',

                'user_type' => 'user',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',
                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'office',
                'email' => 'user4@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => 'احمد نجيب',
                'country' => 'Saudi Arabia',
                'city' => 'الرياض',

                'user_type' => 'user',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',
                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'office',
                'email' => 'user5@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => 'مجدي افشه',
                'country' => 'Saudi Arabia',
                'city' => 'الرياض',

                'user_type' => 'user',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',
                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'office',
                'email' => 'user6@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],

            [
                'name' => 'محمد الشناوي',
                'country' => 'Saudi Arabia',
                'city' => 'الرياض',

                'user_type' => 'user',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',
                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'office',
                'email' => 'user7@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'اكرم توفيق',
                'country' => 'United Arab Emirates',
                'city' => 'الرياض',

                'user_type' => 'user',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',
                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'office',
                'email' => 'user8@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'محمد زيدان',
                'country' => 'Tunisia',
                'city' => 'الرياض',

                'user_type' => 'user',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',
                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'office',
                'email' => 'user9@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'كرم نعيم',
                'country' => 'Egypt',
                'city' => 'الرياض',

                'user_type' => 'user',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',
                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'office',
                'email' => 'user10@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ];
        DB::table('users')->insert($user);
    }
}