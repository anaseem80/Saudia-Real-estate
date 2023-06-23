<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $userData = [
            [

                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'office',
                'name' => 'محمد محمود',
                'country' => 'Egypt',
                'city' => 'الرياض',
                'user_type' => 'admin',
                // 'roles_name' => ['admin'],
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
                // 'roles_name' => ['vendor'],
                'user_type' => 'vendor',
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
                // 'roles_name' => ['vendor'],
                'user_type' => 'vendor',
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

                // 'roles_name' => ['vendor'],
                'user_type' => 'vendor',
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

                // 'roles_name' => ['vendor'],
                'user_type' => 'vendor',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',
                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'owner',
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

                // 'roles_name' => ['user'],
                'user_type' => 'user',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',
                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'user',
                'user_type' => 'user',
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

                // 'roles_name' => ['user'],
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

                // 'roles_name' => ['user'],
                'user_type' => 'user',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',
                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'broker',
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

                // 'roles_name' => ['user'],
                'user_type' => 'user',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',
                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'user',
                'user_type' => 'user',
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

                // 'roles_name' => ['user'],
                'user_type' => 'user',
                'first_phone' => '123456789',
                'second_phone' => '99999999999',
                'commercial_registration_no' => '12345678',
                'license_number' => '12345645',
                'advertiser_type' => 'broker',
                'email' => 'user10@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ];

        $userPermission = [
            'admin',
            'vendor',
            'user',   
            'mediator',
        ];

        $rolelist = [];
        foreach ($userPermission as $permissionName) {
            $role = Role::create(['name' => $permissionName]);
           
            array_push($rolelist, $role->id);
        }

        
        foreach ($userData as $data) {
            $user = User::create($data);
            $user->assignRole([$rolelist[rand(0,3)]]);
        }
    }
}