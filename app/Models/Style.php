<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'category_id',
    ];

    public function style()
    {
        return $this->belongsTo(Category::class);
    }
}
