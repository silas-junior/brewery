<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brewery extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'website',
        'filepath',
        'descript',
    ];

    protected $casts = [
      'address' => 'array'
    ];

    public function beers()
    {
        $this->hasMany(Beer::class);
    }

    public function geocode()
    {
        $this->hasOne(Geolocation::class);
    }
}
