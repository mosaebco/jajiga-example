<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_days',
        'total_price',
        'user_id',
        'property_id',
    ];
}