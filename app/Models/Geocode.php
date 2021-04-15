<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geocode extends Model
{
    use HasFactory;

    protected $fillable = [
        'latitude',
        'longitude',
        'accuracy',
        'brewery_id',
    ];

    protected $casts = [
        'latitude' => 'float',
        'longitude' => 'float'
    ];
}