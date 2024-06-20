<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['category_name' => 'Electronics', 'slug' => 'mô tả'],
            ['category_name' => 'Clothing', 'slug' => 'Mô tả 2'],
            ['category_name' => 'Books', 'slug' => 'mô tả 3'],
            ['category_name' => 'Toys', 'slug' => 'mô tả 4'],
            ['category_name' => 'Furniture', 'slug' => 'mô tả 4'],
        ];

        // Insert data vào bảng categories
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
