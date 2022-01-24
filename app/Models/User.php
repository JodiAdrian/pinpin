<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
         'name','email', 'password',
        'role', 'username', 'remember_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function personal()
    {
        return $this->hasOne(Personal::class, 'user_id');
    }

    public function employment()
    {
        return $this->hasOne(Employment::class, 'user_id');
    }

    public function collateral()
    {
        return $this->hasMany(Collateral::class, 'user_id');
    }

    public function history()
    {
        return $this->hasMany(TransactionHistory::class, 'user_id');
    }
}
