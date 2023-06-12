<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetalis extends Model
{public $timestamps = false;
    use HasFactory;
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
