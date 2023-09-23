<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'national_id',
        'address',
        'note',
        'status'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function serviceCars()
    {
        return $this->hasMany(ServiceCar::class, 'driver_id', 'id');
    }
}
