<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Specialization extends Model
{
    use HasFactory;

    protected $fillable = ['name_ar', 'name_en', 'description', 'icon_url'];

    public function doctorProfiles()
    {
        return $this->hasMany(DoctorProfile::class);
    }
}
