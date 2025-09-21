<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250);
            $table->string('alias', 250);
            $table->string('description', 500);
            $table->text('content');
            $table->string('image')->nullable();
            $table->boolean('is_active');
            $table->foreignId('category_blog_id')->constrained('category_blogs');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};