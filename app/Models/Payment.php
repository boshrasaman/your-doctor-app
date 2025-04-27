<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount', 'currency', 'payment_method', 'transaction_reference',
        'status', 'purpose', 'consultation_id', 'appointment_id', 'payment_date'
    ];

    public function consultation()
    {
        return $this->hasOne(Consultation::class, 'payment_id');
    }

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }
}

