<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceAndBrand extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'brand_id',
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


}
