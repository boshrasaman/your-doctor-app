<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            SpecializationsTableSeeder::class,
            DoctorProfilesTableSeeder::class,

            AppointmentsTableSeeder::class,
            DoctorAvailabilitiesTableSeeder::class,
            ConsultationsTableSeeder::class,
            MessagesTableSeeder::class,
            PrescriptionsTableSeeder::class,
            FaqsTableSeeder::class,
            UserQuestionsTableSeeder::class,
            UserQuestionAnswersTableSeeder::class,
            BlogPostsTableSeeder::class,
            BlogCommentsTableSeeder::class,
            PaymentsTableSeeder::class,
        ]);
    }
}
