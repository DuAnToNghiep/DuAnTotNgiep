<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;

class ColorSeeder extends Seeder
{
    public function run()
    {
        $colors = [
            ['color_name' => 'Red', 'status' => '#FF0000'],
            ['color_name' => 'Green', 'status' => '#00FF00'],
            ['color_name' => 'Blue', 'status' => '#0000FF'],
            ['color_name' => 'Yellow', 'status' => '#FFFF00'],
            ['color_name' => 'Purple', 'status' => '#800080'],
        ];


        foreach ($colors as $color) {
            Color::create($color);
        }
    }
}
