<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DoctorProfile;
class DoctorProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = [
            [
                'user_id' => 1, // تأكد أن هذا موجود فعلاً في users
                'specialization_id' => 1, // اختر تخصص موجود
                'bio' => 'طبيب قلب بخبرة 10 سنوات.',
                'years_experience' => 10,
                'consultation_fee' => 150.00,
            ],
            [
                'user_id' => 2,
                'specialization_id' => 1,
                'bio' => 'أخصائية قلب معتمدة.',
                'years_experience' => 8,
                'consultation_fee' => 140.00,
            ],
            [
                'user_id' => 3,
                'specialization_id' => 1,
                'bio' => 'استشاري أمراض القلب والأوعية.',
                'years_experience' => 12,
                'consultation_fee' => 160.00,
            ],
        ];

        foreach ($doctors as $doctor) {
            DoctorProfile::create($doctor);
        }
    }
}
