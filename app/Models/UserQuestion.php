<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['author_user_id', 'title', 'details'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_user_id');
    }

    public function answers()
    {
        return $this->hasMany(UserQuestionAnswer::class, 'question_id');
    }
}

