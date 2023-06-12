<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public $table='countries';
    protected $fillable = [
        'name',
        // add other fillable attributes here
    ];
        public function cities()
{
    return $this->hasMany(City::class,'country_id');
}
}
