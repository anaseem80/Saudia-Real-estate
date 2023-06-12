<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catogery extends Model
{
    protected $table = 'catogerys';
    use HasFactory;
    protected $fillable = [
        'name',
        'image_path',
        'Created_by',
    ];
    public function property()
    {
        return $this->hasMany(Property::class,'catogerie_id');
    }
}
