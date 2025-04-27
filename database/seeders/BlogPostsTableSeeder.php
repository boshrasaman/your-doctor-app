<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogPost;
class BlogPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogPost::create([
            'author_doctor_id' => 2,
            'title' => 'أهمية الفحص الدوري',
            'content' => 'الفحص الطبي الدوري يقلل من خطر الأمراض المزمنة.',
            'featured_image_url' => 'https://example.com/blog/featured.jpg',
            'status' => 'published',
            'published_at' => now(),
        ]);
    }
}
