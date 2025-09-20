<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'title' => 'Điện thoại vivo V40 Lite 8GB/256GB',
                'description' => 'Điện thoại vivo V40 Lite 8GB/256GB - Hàng chính hãng',
                'image1' => 'https://cdnv2.tgdd.vn/mwg-static/tgdd/Products/Images/42/329959/vivo-v40-lite-tim-5-638640908394698790-750x500.jpg',
                'image2' => 'https://cdnv2.tgdd.vn/mwg-static/tgdd/Products/Images/42/329959/vivo-v40-lite-tim-8-638640908415571499-750x500.jpg',
                'image3' => 'https://cdnv2.tgdd.vn/mwg-static/tgdd/Products/Images/42/329959/vivo-v40-lite-tim-8-638640908415571499-750x500.jpg',
                'image4' => 'https://cdnv2.tgdd.vn/mwg-static/tgdd/Products/Images/42/329959/vivo-v40-lite-tim-8-638640908415571499-750x500.jpg',
                'star' => 5,
                'is_active' => true,
                'category_product_id' => 1,
                'account_id' => 1,
                'company_id'=>1,
                'alias' => 'Dien_thoai_vivo_v40_lite_8b_256gb',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}