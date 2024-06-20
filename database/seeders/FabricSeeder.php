<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fabric;

class FabricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fabric::create([
            'fabric' => 'Cotton',
            'create_date' => now(),
            'update_date' => now(),
        ]);

        Fabric::create([
            'fabric' => 'Silk',
            'create_date' => now(),
            'update_date' => now(),
        ]);

        // Thêm dữ liệu khác nếu cần
    }
}
