<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;
class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payment::create([
            'amount' => 150.00,
            'currency' => 'SAR',
            'payment_method' => 'credit_card',
            'status' => 'completed',
            'purpose' => 'consultation',
            'payment_date' => now(),
        ]);
    }
}
