<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCar extends Model
{
    use HasFactory;
    protected $fillable = ["id", "time", "address", "status", "phone", "desc", "user_id", "car_id", "created_at", "updated_at", "conduction"];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id', 'id');
    }
}
