<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    public function images()
    {
        return $this->hasMany(Image::class,'property_id');
    }
    public function report()
    {
        return $this->hasMany(Report::class,'property_id');
    }  
    public function enquiry()
    {
        return $this->hasMany(Enquiry::class,'property_id');
    }

    public function facilities()
    {
        return $this->hasMany(Facility::class,'property_id');
    }

    public function property_details()
    {
        return $this->hasOne(PropertyDetalis::class, 'property_id');
    }

    public function catogery()
    {
        return $this->belongsTo(Catogery::class,'catogerie_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    
}
