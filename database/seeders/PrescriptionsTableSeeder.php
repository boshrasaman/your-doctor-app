<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prescription;
class PrescriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prescription::create([
            'consultation_id' => 1,
            'patient_user_id' => 1,
            'doctor_user_id' => 2,
            'medication_details' => 'Panadol 500mg - 3 مرات يوميًا',
            'instructions' => 'تناول بعد الأكل',
            'issue_date' => now()->toDateString(),
        ]);
    }
}
