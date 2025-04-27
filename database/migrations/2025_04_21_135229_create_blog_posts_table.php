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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id('post_id');
            $table->unsignedBigInteger('author_doctor_id');
            $table->string('title');
            $table->text('content');
            $table->string('featured_image_url')->nullable();
            $table->string('video_url')->nullable();
            $table->string('status')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        
            $table->foreign('author_doctor_id')->references('doctor_id')->on('doctor_profiles');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
