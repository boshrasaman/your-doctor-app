<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogComment extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'author_user_id', 'comment_text'];

    public function post()
    {
        return $this->belongsTo(BlogPost::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_user_id');
    }
}

