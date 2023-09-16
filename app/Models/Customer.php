<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_count',
        'start_time',
        'name',
        'name_kana',
        'post_code',
        'address_1',
        'address_2',
        'address_3',
        'tel_number',
        'email',
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
