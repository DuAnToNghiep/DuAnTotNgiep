<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'size_name'

    ];
    const CREATED_AT = 'create_date';
    const UPDATED_AT = 'update_date';
}
