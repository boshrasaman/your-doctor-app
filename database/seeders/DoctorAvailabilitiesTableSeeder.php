<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DoctorAvailability;
class DoctorAvailabilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {  DoctorAvailability::create([
        'doctor_id' => 2,
        'day_of_week' => 1, // الاثنين
        'start_time' => '09:00:00',
        'end_time' => '13:00:00',
        'is_available' => true,
    ]);
        //
    }
}
