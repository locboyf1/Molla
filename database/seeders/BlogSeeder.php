<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('blogs')->insert([
            [
                'id' => 1,
                'title' => '10 mẹo tiết kiệm pin cho điện thoại',
                'alias' => '10-meo-tiet-kiem-pin-cho-dien-thoai',
                'content' => 'Việc sử dụng điện thoại thông minh hàng ngày có thể làm hao pin nhanh chóng. Dưới đây là 10 mẹo giúp bạn tiết kiệm pin hiệu quả hơn.',
                'category_blog_id' => 1,
                'description' => 'Những mẹo đơn giản giúp kéo dài thời lượng pin cho điện thoại của bạn.',
                'image' => 'https://img.freepik.com/premium-vector/gradient-battery-background_23-2151863674.jpg',
                'user_id' => 1,
                'is_active' => true,
                'created_at'=> now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'title' => 'Lịch sử phát triển của công nghệ di động',
                'alias' => 'lich-su-phat-trien-cua-cong-nghe-di-dong',
                'content' => 'Công nghệ di động đã trải qua nhiều giai đoạn phát triển từ những chiếc điện thoại cục gạch đầu tiên đến các smartphone hiện đại ngày nay.',
                'category_blog_id' => 2,
                'description' => 'Tìm hiểu về sự tiến hóa của công nghệ di động qua các thập kỷ.',
               'image'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhp6M49MCep7r6yPm5hjaFE35pZ2nptIfEGA&s',
                'user_id' => 1,
                'is_active' => true,
                'created_at'=> now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'title' => 'Khuyến mãi lớn mùa hè 2025',
                'alias' => 'khuyen-mai-lon-mua-he-2025',
                'category_blog_id' => 3,
                'description' => 'Ưu đãi hấp dẫn từ các thương hiệu công nghệ hàng đầu trong mùa hè này.',
                'content' => 'Chào đón mùa hè với những ưu đãi hấp dẫn từ các thương hiệu công nghệ hàng đầu. Đừng bỏ lỡ cơ hội sở hữu sản phẩm yêu thích với giá cực sốc!',
                'image' => 'https://luat24h.net/wp-content/uploads/2022/08/khuyen-mai-hay-khuyen-mai-1.jpg',
                'user_id' => 1,
                'is_active' => true,
                'created_at'=> now(),
                'updated_at' => now()
            ]
        ]);
    }
}