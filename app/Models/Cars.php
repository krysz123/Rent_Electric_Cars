<?php

namespace App\Models;

use App\Models\CarBrand;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cars extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'model',
        'brand_id',
        'range',
        'price',
    ];

    public function brands()
    {
        return $this->belongsTo(CarBrand::class);
    }
}
