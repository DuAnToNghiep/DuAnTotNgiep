<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;
    protected $fillable = [
        'bill_name',
        'bill_type',
        'user_id',
        'email',
        'address',
        'promotion_id',
        'buy_date',
        'cost',
        'discount_price',
        'shipping_fee',
        'qr_code',
        'note',
        'estimated_delivery_date',
        'delivery_date',
        'recipient_name',
        'create_date',
        'update_date',
        'status',
    ];

    public $timestamps = false; // Tắt timestamps mặc định
    const CREATED_AT = 'create_date';
    const UPDATED_AT = 'update_date';
}