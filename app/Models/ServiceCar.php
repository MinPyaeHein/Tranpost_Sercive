<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCar extends Model
{
    use HasFactory;
    protected $fillable = ["id", "name", "car_no", "size", "price","desc", "created_at", "updated_at", "driver_id","service_type"];
    public function user()
    {
        return $this->belongsTo(User::class, 'driver_id', 'id');
    }
}