<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserQuestionAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['question_id', 'author_user_id', 'answer_text'];

    public function question()
    {
        return $this->belongsTo(UserQuestion::class, 'question_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_user_id');
    }
}
