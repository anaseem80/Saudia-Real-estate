<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            [
                'company_name' => 'Company 1',
                'email' => 'company1@email.com',
                'website_link' => 'https://company1.com',
                'company_phone' => '1234567890',
                'company_address' => '123 Main St',
                'twitter' => 'https://twitter.com/company1',
                'facebook' => 'https://facebook.com/company1',
                'google' => 'https://plus.google.com/company1',
                'linkedin' => 'https://linkedin.com/company1',
                'github' => 'https://github.com/company1',
                'biographical_information' => 'About Company 1',
                'logo' => 'https://company1.com/logo.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('settings')->insert($companies);

    }
}
