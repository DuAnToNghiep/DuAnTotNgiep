<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_detail_id',
        'name_image',
        'url',
    ];

    // Define the relationship with ProductDetail
    public function productDetail()
    {
        // return $this->belongsTo(productDetail::class);
    }
}
