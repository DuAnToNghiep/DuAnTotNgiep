<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnItem extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'bill_id',
        'user_id',
        'product_detail_id',
        'return_date',
        'reason',
        'status',
        'create_date',
        'update_date'
    ];
}
