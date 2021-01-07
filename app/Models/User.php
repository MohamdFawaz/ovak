<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Yadahan\AuthenticationLog\AuthenticationLogable;

class User extends Authenticatable
{
    use Notifiable, AuthenticationLogable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function calculations()
    {
        return $this->hasMany(UserCalculationLog::class,'user_id');
    }

    public function askings()
    {
        return $this->hasMany(UserAsking::class,'user_id');
    }

    public function filters()
    {
        return $this->hasMany(UserFilterLog::class,'user_id');
    }

    public function getCreatedAtAttribute($value): string
    {
        return Carbon::parse($value)->format('d-M-yy');
    }
}
