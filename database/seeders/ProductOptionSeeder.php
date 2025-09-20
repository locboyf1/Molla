<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductOptionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("product_options")->insert([
            [
                'id'=> 1,
                'name' => 'Màu tím',
                'position' => 1,
                'price' => 8500000,
                'price_sale' => 8200000,
                'is_active' => true,
                'product_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'=> 2,
                'name' => 'Màu đen',
                'position' => 2,
                'price' => 8500000,
                'price_sale' => 8200000,
                'is_active' => true,
                'product_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'=> 3,
                'name' => 'Màu bạc',
                'position' => 3,
                'price' => 8500000,
                'price_sale' => 8200000,
                'is_active' => true,
                'product_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
    }
}