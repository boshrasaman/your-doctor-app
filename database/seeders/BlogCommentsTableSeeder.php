<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogComment;
class BlogCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogComment::create([
            'post_id' => 1,
            'author_user_id' => 1,
            'comment_text' => 'مقال مفيد جدًا، شكرًا دكتور.',
        ]);
    }
}
