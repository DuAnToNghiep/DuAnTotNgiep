<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // Chỉ định tên bảng 'products'

    protected $fillable = [
        'product_name',
        'product_price',
    ];

    public $timestamps = false; // Vô hiệu hóa timestamps

    // Không cần thiết phải khai báo $incrementing = false; để mặc định là true

    // Nếu bạn muốn tự động tăng (auto-increment) cho trường id, hãy xóa dòng $incrementing = false; hoặc đặt thành true
}
