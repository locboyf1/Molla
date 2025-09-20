<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    public function run(): void
    {
        DB::table("accounts")->insert([
            [
                'id' => 1,
                'name' => 'Quang Lộc',
                'email' => 'quangloc@admin.com',
                'password' => bcrypt('123456'),
                'phone' => '0123456789',
                'address' => '123 Đường Lộc, Phường Bình Thọ, Thành phố Thủ Đức, TP.HCM',
                'avatar' => 'https://img.freepik.com/premium-vector/default-avatar-profile-icon-social-media-user-image-gray-avatar-icon-blank-profile-silhouette-vector-illustration_561158-3485.jpg',
                'role_id' => 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}