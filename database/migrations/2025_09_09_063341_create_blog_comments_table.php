<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blog_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained('blogs');
            $table->foreignId('user_id')->constrained('users');
            $table->text('comment');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_comments');
    }
};