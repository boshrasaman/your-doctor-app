<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DoctorProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'specialization_id', 'bio', 'years_experience',
        'consultation_fee', 'profile_picture_url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

    public function availability()
    {
        return $this->hasMany(DoctorAvailability::class, 'doctor_id');
    }

    public function blogPosts()
    {
        return $this->hasMany(BlogPost::class, 'author_doctor_id');
    }
}

