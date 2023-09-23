<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'rental_bike_1',
        'rental_bike_2',
        'rental_bike_3',
        'rental_bike_4',
        'rental_bike_5',
        'rental_fee_1',
        'rental_fee_2',
        'rental_fee_3',
        'rental_fee_4',
        'rental_fee_5',
        'rental_start_time',
    ];


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }


    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }
}
