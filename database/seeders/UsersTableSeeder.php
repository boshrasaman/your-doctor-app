<?php

 

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // تأكد من أن جدول المستخدمين فارغ أو لا يحوي سجلات مكررة أولاً (اختياري)
        // User::truncate();

        $doctors = [
            [
                'full_name'    => 'د. محمد الأحمد',
                'email'        => 'mohammad.ahmad@example.com',
                'password_hash'=> bcrypt('password123'),
                'phone_number' => '0501234567',
                'role'         => 'doctor',
                'is_active'    => true,
            ],
            [
                'full_name'    => 'د. سارة الخطيب',
                'email'        => 'sarah.khatib@example.com',
                'password_hash'=> bcrypt('password123'),
                'phone_number' => '0502345678',
                'role'         => 'doctor',
                'is_active'    => true,
            ],
            [
                'full_name'    => 'د. أحمد الهاشمي',
                'email'        => 'ahmad.hashmi@example.com',
                'password_hash'=> bcrypt('password123'),
                'phone_number' => '0503456789',
                'role'         => 'doctor',
                'is_active'    => true,
            ],
            [
                'full_name'    => 'د. ليلى العتيبي',
                'email'        => 'layla.otaibi@example.com',
                'password_hash'=> bcrypt('password123'),
                'phone_number' => '0504567890',
                'role'         => 'doctor',
                'is_active'    => true,
            ],
            [
                'full_name'    => 'د. خالد الشمري',
                'email'        => 'khaled.shamari@example.com',
                'password_hash'=> bcrypt('password123'),
                'phone_number' => '0505678901',
                'role'         => 'doctor',
                'is_active'    => true,
            ],
        ];

        foreach ($doctors as $doc) {
            User::create($doc);
        }
    }
}

