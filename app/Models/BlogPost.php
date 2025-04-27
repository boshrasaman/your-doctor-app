<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_doctor_id', 'title', 'content', 'featured_image_url',
        'status', 'published_at'
    ];

    public function doctor()
    {
        return $this->belongsTo(DoctorProfile::class, 'author_doctor_id');
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class, 'post_id');
    }
}

