<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'role_name'
    ];
    const CREATED_AT = 'create_date';
    const UPDATED_AT = 'update_date'; // Nếu bạn có cột `updated_date`
}
