<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id('message_id');
            $table->unsignedBigInteger('consultation_id');
            $table->unsignedBigInteger('sender_user_id');
            $table->text('message_content');
            $table->boolean('is_read')->default(false);
            $table->string('attachment_url')->nullable();
            $table->string('attachment_type')->nullable();
            $table->timestamps();
        
            $table->foreign('consultation_id')->references('consultation_id')->on('consultations');
            $table->foreign('sender_user_id')->references('user_id')->on('users');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
