<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_user_id', 'doctor_user_id', 'start_time',
        'end_time', 'status', 'payment_id'
    ];

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_user_id');
    }

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_user_id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function prescription()
    {
        return $this->hasOne(Prescription::class);
    }
}

