<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    public function run(): void
    {
        DB::table("companies")->insert([
            [
                'id' => 1,
                'name' => "Vivo",
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/2/29/Vivo_Logo.svg',
                'description' => 'Vivo là một thương hiệu điện thoại tập trung vào thiết kế thời thượng, màn hình lớn, camera chất lượng cao và hiệu năng mượt mà, với các dòng sản phẩm đa dạng từ phân khúc phổ thông đến cận cao cấp, thường có pin dung lượng lớn và công nghệ sạc nhanh.',
                'position' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}