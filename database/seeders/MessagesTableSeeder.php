<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;
class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Message::create([
            'consultation_id' => 1,
            'sender_user_id' => 1,
            'message_content' => 'مرحباً دكتور، هل يمكننا الحديث الآن؟',
            'is_read' => false,
        ]);
    }
}
