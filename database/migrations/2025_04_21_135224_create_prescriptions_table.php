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
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id('prescription_id');
            $table->unsignedBigInteger('consultation_id');
            $table->unsignedBigInteger('patient_user_id');
            $table->unsignedBigInteger('doctor_user_id');
            $table->text('medication_details');
            $table->text('instructions');
            $table->date('issue_date');
            $table->timestamps();
        
            $table->foreign('consultation_id')->references('consultation_id')->on('consultations');
            $table->foreign('patient_user_id')->references('user_id')->on('users');
            $table->foreign('doctor_user_id')->references('user_id')->on('users');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prescriptions');
    }
};
