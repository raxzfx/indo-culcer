<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'id_category',
        'main_image',
        'images',
        'provincy',
        'city',
        'view_count',
        'is_popular',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }
}
