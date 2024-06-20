<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Electronics', 'description' => 'mô tả'],
            ['name' => 'Clothing', 'description' => 'Mô tả 2'],
            ['name' => 'Books', 'description' => 'mô tả 3'],
            ['name' => 'Toys', 'description' => 'mô tả 4'],
            ['name' => 'Furniture', 'description' => 'mô tả 4'],
        ];

        // Insert data vào bảng categories
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
