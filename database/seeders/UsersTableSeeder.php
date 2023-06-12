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
    'name' => 'محمد محمود',
    'country' => 'Egypt',
    'user_type' => 'user',
    'phone' => '123456789',
    
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
    'user_type' => 'user',
    'phone' => '123456789',
    
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
    'user_type' => 'user',
    'phone' => '123456789',
    
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
    'user_type' => 'user',
    'phone' => '123456789',
    
    'email' => 'user4@gmail.com',
    'email_verified_at' => now(),
    'password' => bcrypt('12345678'),
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'name' => 'احمد نجيب',
    'country' => 'United Arab Emirates',
    'user_type' => 'user',
    'phone' => '123456789',
    
    'email' => 'user5@gmail.com',
    'email_verified_at' => now(),
    'password' => bcrypt('12345678'),
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'name' => 'مجدي افشه',
    'country' => 'United Arab Emirates',
    'user_type' => 'user',
    'phone' => '123456789',
    
    'email' => 'user6@gmail.com',
    'email_verified_at' => now(),
    'password' => bcrypt('12345678'),
    'remember_token' => Str::random(10),
    'created_at' => now(),
    'updated_at' => now(),
],

[
    'name' => 'محمد الشناوي',
    'country' => 'United Arab Emirates',
    'user_type' => 'user',
    'phone' => '123456789',
    
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
    'user_type' => 'user',
    'phone' => '123456789',
    
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
    'user_type' => 'user',
    'phone' => '123456789',
    
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
    'user_type' => 'user',
    'phone' => '123456789',
    
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
