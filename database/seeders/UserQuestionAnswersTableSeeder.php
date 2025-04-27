<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserQuestionAnswer;
class UserQuestionAnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserQuestionAnswer::create([
            'question_id' => 1,
            'author_user_id' => 2,
            'answer_text' => 'نعم، من الممكن أن يكون السبب هو ارتفاع ضغط الدم.',
        ]);
    }
}
