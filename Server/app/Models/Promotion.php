<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'promotion_name',
        'promotion_code',
        'promotion_type',
        'promotion_value',
        'start_date',
        'end_date',
        'quantity',
        'promotion_conditions',
        'status',
        'create_date',
        'update_date'

    ];
}
