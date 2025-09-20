<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'title'=>'Quản trị viên',
                'description'=>'Quản trị viên có toàn quyền trên hệ thống',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id'=>2,
                'title'=>'Khách hàng',
                'description'=>'Khách hàng chỉ có quyền mua hàng và xem thông tin cá nhân',
                'created_at' => now(),
                'updated_at' => now()
            ]
            ]);
    }
}