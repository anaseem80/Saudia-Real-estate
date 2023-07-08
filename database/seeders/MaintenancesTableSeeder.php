<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaintenancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maintenances')->insert([
            'ismaintenanc' => true,
            'content' => 'تم وضع الموقع حالياً في الصيانة وسيتم إعادته قريباً',
        ]);
    }
}