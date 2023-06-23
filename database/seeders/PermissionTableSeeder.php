<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        $permissions = [
            'عقار',
            'اضافة عقار',
            'الاعلانات النشطه',
            'الاعلانات الغير النشطه',
            'الاقسام',
            'فئات العقار',
            'نوع العقار',
            'المدونه',
            'التقارير',
            'الاستعلامات',
            'الابلاغات',
            'المستخدمين',
            // 'الابلاغات',
            'رؤية المستخدمين',
            'صلاحيات المستخدمين',
            'الدول و المدن',
            'رؤية الدول',
            'رؤية المدن',
            'الاعدادات',
            'التقارير و الاستعلامات',
            'تغيير اعدادات الموقع و التطبيق',
            'تغير الاعدادت الرئيسيه',

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}