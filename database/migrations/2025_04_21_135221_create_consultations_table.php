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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id('consultation_id');
            $table->unsignedBigInteger('patient_user_id');
            $table->unsignedBigInteger('doctor_user_id');
            $table->dateTime('start_time');
            $table->dateTime('end_time')->nullable();
            $table->string('status')->nullable();
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->timestamps();
        
            $table->foreign('patient_user_id')->references('user_id')->on('users');
            $table->foreign('doctor_user_id')->references('user_id')->on('users');
            $table->foreign('payment_id')->references('payment_id')->on('payments');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
