<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;
class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faq::create([
            'question' => 'كيف أحجز موعد؟',
            'answer' => 'يمكنك الحجز من صفحة الأطباء.',
            'category' => 'حجوزات',
            'created_by_admin_id' => 1,
        ]);
    }
}
