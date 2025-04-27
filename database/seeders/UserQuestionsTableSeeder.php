<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserQuestion;
class UserQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserQuestion::create([
            'author_user_id' => 1,
            'title' => 'ما هي أعراض ارتفاع الضغط؟',
            'details' => 'أعاني من صداع دائم، هل هذا بسبب ارتفاع الضغط؟',
        ]);
        
    }
}
