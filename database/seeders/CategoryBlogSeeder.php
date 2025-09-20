<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryBlogSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('category_blogs')->insert([
            [
                'id' => 1,
                'title' => 'Mẹo công nghệ',
                'alias' => 'Tip',
                'description' => 'Mẹo vặt công nghệ',
                'position' => 1,
                'is_active' => true,
                'created_at'=> now(),
                'updated_at' => now()
            ],
              [
                'id' => 2,
                'title' => 'Wiki công nghệ',
                'alias' => 'Wiki',
                'description' => 'Kiến thức công nghệ',
                'position' => 2,
                'is_active' => true,
                'created_at'=> now(),
                'updated_at' => now()
              ],
                [
                'id' => 3,
                'title' => 'Khuyến mãi công nghệ',
                'alias' => 'Sale',
                'description' => 'Khuyến mãi công nghệ',
                'position' => 3,
                'is_active' => true,
                'created_at'=> now(),
                'updated_at' => now()
            ]
        ]);
    }
}