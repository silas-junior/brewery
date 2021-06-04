<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function beers()
    {
        return $this->hasMany(Beer::class);
    }

    public function styles()
    {
        return $this->hasMany(Style::class);
    }
}
