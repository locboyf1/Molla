<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('category_products')->insert([
            [
                'id' => 1,
                'title' => 'Điện thoại',
                'alias' => 'dien-thoai',
                'description' => 'Các loại điện thoại thông minh',
                'image' => 'assets/images/demos/demo-4/cats/3.png',
                'position' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'title' => 'Máy ảnh',
                'alias' => 'may-anh',
                'description' => 'Các loại máy ảnh kỹ thuật số',
                'image' => 'assets/images/demos/demo-4/cats/2.png',
                'position' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'title' => 'Laptop',
                'alias' => 'laptop',
                'description' => 'Các loại laptop',
                'image' => 'assets/images/demos/demo-4/cats/1.png',
                'position' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'title' => 'Tivi',
                'alias' => 'tivi',
                'description' => 'Tivi màn hình phẳng các loại',
                'image' => 'assets/images/demos/demo-4/cats/4.png',
                'position' => 4,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ],
             [
                'id' => 5,
                'title' => 'Loa',
                'alias' => 'loa',
                'description' => 'Các loại loa nghe nhạc',
                'image' => 'assets/images/demos/demo-4/cats/5.png',
                'position' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
             ],
              [
                'id' => 6,
                'title' => 'Đồng hồ',
                'alias' => 'dong-ho',
                'description' => 'Các loại đồng hồ thông minh',
                'image' => 'assets/images/demos/demo-4/cats/6.png',
                'position' => 6,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}