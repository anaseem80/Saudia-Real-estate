<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingWeb extends Model
{
    use HasFactory;
    protected $table ='setting_webs';
    protected $fillable = [
        'about_page',
        'terms',
        'privacy',
        'color_primery',
        'color_second_primery',
        'licance_web',
        'banner',
    ];
}