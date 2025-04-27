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
        Schema::create('doctor_profiles', function (Blueprint $table) {
            $table->id('doctor_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('specialization_id');
            $table->text('bio')->nullable();
            $table->integer('years_experience')->nullable();
            $table->decimal('consultation_fee', 10, 2)->nullable();
            $table->string('profile_picture_url')->nullable();
            $table->timestamps();
        
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('specialization_id')->references('specialization_id')->on('specializations');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_profiles');
    }
};
