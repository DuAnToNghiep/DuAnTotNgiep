<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillsDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        "bill_id",
        "date_bill",
        "payment_method",
        "cash",
        "transfer",
        "transfer_vnp",
        "total_amount",
        "description",
        "create_date",
        "update_date",
        "status"
    ];

    public $timestamps = false; // Tắt timestamps mặc định
    const CREATED_AT = 'create_date';
    const UPDATED_AT = 'update_date';
}
