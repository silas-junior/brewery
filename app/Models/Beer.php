<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'filepath',
        'brewery_id',
        'category_id',
        'style_id',
    ];

    public function brewery()
    {
        return $this->belongsTo(Brewery::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
//
//    public function style()
//    {
//        $this->belongsTo(Style::class);
//    }
}
