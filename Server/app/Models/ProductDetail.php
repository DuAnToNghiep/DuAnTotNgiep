<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'category_id',
        'product_id',
        'import_price_product_detail',
        'price_product_detail',
        'color_id ',
        'description',
        'quantity',
        'note',
        'slug',
        'create_date',
        'update_date',
        'status'
    ];
}
