<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand', 'model', 'color', 'production_year', 'seats', 'price', 'status', 'image'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
