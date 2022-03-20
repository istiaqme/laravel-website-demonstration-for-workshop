<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'title',
        'details',
        'outer_link',
        'image',
        'position_key'
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function categoriesByService($serviceId)
    {
        $categrotySpecs = "categories.service_id";
        return $this->hasMany(Category::class)->where($categrotySpecs, $serviceId)->get();
    }
}
