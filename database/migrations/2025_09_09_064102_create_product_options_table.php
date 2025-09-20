<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_options', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->integer('position');
            $table->integer('price');
            $table->integer('price_sale')->nullable();
            $table->boolean('is_active');
            $table->foreignId('product_id')->constrained('products');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_options');
    }
};