<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
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

    public function brands()
    {
        return $this->hasMany(ServiceAndBrand::class);
    }
}
