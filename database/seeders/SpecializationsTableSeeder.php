<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Specialization;
class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specialization::create([
            'name_ar' => 'طب القلب',
            'name_en' => 'Cardiology',
            'description' => 'تشخيص وعلاج أمراض القلب.',
            'icon_url' => 'https://example.com/icons/heart.png',
        ]);
    }
}
