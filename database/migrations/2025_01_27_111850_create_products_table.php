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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('UserID')->nullable()->default(4);
            $table->tinyInteger('status')->default(0);
            $table->string('pro_condition')->default('New');
            $table->string('slung')->nullable();
            $table->string('category')->nullable();
            $table->integer('google_product_category')->default(6552);
            $table->integer('sub_category_id')->nullable();
            $table->string('brand')->default('PHARMEX');
            $table->string('sku')->nullable();
            $table->string('stock')->nullable()->default('In Stock');
            $table->string('price_raw')->nullable();
            $table->string('price')->nullable();
            $table->text('meta')->nullable();
            $table->text('content')->nullable();
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->string('image_four')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
