<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
USE App\Models\Consultation;
class ConsultationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    
    {
        Consultation::create([
            'patient_user_id' => 1,
            'doctor_user_id' => 2,
            'start_time' => now(),
            'status' => 'active',
        ]);
    }
}
