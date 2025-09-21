<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CategoryBlogSeeder::class,
            CategoryProductSeeder::class,
            CompanySeeder::class,
            ProductSeeder::class,
            BlogSeeder::class,
            ProductOptionSeeder::class,
            MenuSeeder::class
        ]);
    }
}