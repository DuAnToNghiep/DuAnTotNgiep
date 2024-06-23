<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "create_date",
        "update_date",
        "status",
    ];

    public $timestamps = false; // Tắt timestamps mặc định
    const CREATED_AT = 'create_date';
    const UPDATED_AT = 'update_date';
}
