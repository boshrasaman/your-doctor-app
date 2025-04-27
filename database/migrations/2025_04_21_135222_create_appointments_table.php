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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('appointment_id');
            $table->unsignedBigInteger('patient_user_id');
            $table->unsignedBigInteger('doctor_id');
            $table->dateTime('appointment_datetime');
            $table->text('duration_minutes')->nullable();
            $table->string('status')->nullable();
            $table->text('patient_notes')->nullable();
            $table->text('doctor_notes')->nullable();
            $table->unsignedBigInteger('payment_id')->nullable();
            $table->timestamps();
        
            $table->foreign('patient_user_id')->references('user_id')->on('users');
            $table->foreign('doctor_id')->references('doctor_id')->on('doctor_profiles');
            $table->foreign('payment_id')->references('payment_id')->on('payments');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
