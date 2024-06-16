<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        \App\Models\CartDetail::factory(10)->create();
    }
}
