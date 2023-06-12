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


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable , Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    ];
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
    public function property()
    {
        return $this->hasMany(Property::class,'user_id');
    }
    public function blog()
    {
        return $this->hasMany(Blog::class,'user_id');
    }

    // public function sendPasswordResetNotification($userr)
    // {
    //     $userr->notify(new LoginNotification);
    //     // $url = 'https://spa.test/reset-password?token=' . $token;

    //     // $this->notify(new ResetPasswordNotifications($url));
    // }
}
