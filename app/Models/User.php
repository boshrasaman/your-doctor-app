<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = ['email_verified_at' => 'datetime'];

    public function doctorProfile()
    {
        return $this->hasOne(DoctorProfile::class, 'user_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'patient_user_id');
    }

    public function consultationsAsPatient()
    {
        return $this->hasMany(Consultation::class, 'patient_user_id');
    }

    public function consultationsAsDoctor()
    {
        return $this->hasMany(Consultation::class, 'doctor_user_id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'sender_user_id');
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class, 'patient_user_id');
    }

    public function questions()
    {
        return $this->hasMany(UserQuestion::class, 'author_user_id');
    }

    public function questionAnswers()
    {
        return $this->hasMany(UserQuestionAnswer::class, 'author_user_id');
    }

    public function blogComments()
    {
        return $this->hasMany(BlogComment::class, 'author_user_id');
    }

    public function faqsCreated()
    {
        return $this->hasMany(Faq::class, 'created_by_admin_id');
    }
}
