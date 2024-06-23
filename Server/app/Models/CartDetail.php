<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;

    protected $table = 'cart_details';

    public function product()
    {
        // đợi update products
        // return $this->belongsTo(Product::class, 'product_id');
    }
}
