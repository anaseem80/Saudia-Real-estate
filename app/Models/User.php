<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Notifications\LoginNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\ResetPasswordNotification;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable , Notifiable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
 protected $fillable = [
        'name',
        'country',
        'city',
        'user_type',
        'first_phone',
        'second_phone',
        'commercial_registration_no',
        'license_number',
        'advertiser_type',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        // 'roles_name',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime', 
        // 'roles_name' => 'array',
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
    public function phone()
    {
        return $this->hasMany(Phone::class,'user_id');
    }
    public function property()
    {
        return $this->hasMany(Property::class,'user_id');
    }
    public function blog()
    {
        return $this->hasMany(Blog::class,'user_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    // public function sendPasswordResetNotification($userr)
    // {
    //     $userr->notify(new LoginNotification);
    //     // $url = 'https://spa.test/reset-password?token=' . $token;

    //     // $this->notify(new ResetPasswordNotifications($url));
    // }
}