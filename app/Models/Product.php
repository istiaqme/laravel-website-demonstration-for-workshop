<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'title',
        'details',
        'image',
        'service_id',
        'brand_id',
        'category_id',
        'outer_link',
        'position_key'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
