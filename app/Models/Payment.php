<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'bill_id',
        'date_bill',
        'payment_method',
        'cash',
        'transfer',
        'transfer_vnp',
        'total_amount',
        'description',
        'create_date',
        'update_date',
        'status'
    ];

    public $timestamps = false; // Tắt timestamps mặc định
}
