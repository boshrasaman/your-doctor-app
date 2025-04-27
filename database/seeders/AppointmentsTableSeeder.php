<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;
class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointment::create([
            'patient_user_id' => 1,
            'doctor_id' => 2,
            'appointment_datetime' => now()->addDays(2),
            'duration_minutes' => 30,
            'status' => 'scheduled',
        ]);
    }
}
