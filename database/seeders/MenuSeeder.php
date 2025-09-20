<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("menus")->insert([
            [
                "id" => 1,
                "title" => "Trang chủ",
                "alias" => "Home",
                "position" => 1,
                "parent_id" => null,
                "is_active" => true,
                "created_at" => now()
            ],
            [
                "id" => 2,
                "title" => "Sản phẩm",
                "alias" => "Products",
                "position" => 2,
                "parent_id" => null,
                "is_active" => true,
                "created_at" => now()
            ],
            [
                "id"=> 3,
                "title"=> "Bài viết",
                "alias" => "Blogs",
                "position" => 3,
                "parent_id" => null,
                "is_active" => true,
                "created_at" => now()
            ]
        ]);
    }
}