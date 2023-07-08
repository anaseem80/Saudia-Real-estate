<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingWebTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('setting_webs')->insert([
            'about_page' => 'نبذة عنا',
            'terms' => 'شروط الخدمة',
            'privacy' => 'سياسة الخصوصية',
            'color_primery' => '#FFFFFF',
            'color_second_primery' => '#000000',
            'licance_web' => 'رخصة الموقع',
            'banner' => 'unar.png',
        ]);
    }
}