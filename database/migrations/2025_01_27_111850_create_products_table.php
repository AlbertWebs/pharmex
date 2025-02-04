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
            $table->string('title')->nullable();
            $table->string('category')->nullable();
            $table->text('dosage')->nullable();
            $table->string('strength')->nullable();
            $table->string('batch_no')->nullable();
            $table->string('expiry')->nullable();
            $table->string('packsize')->nullable();
            $table->string('packs')->nullable();
            $table->string('quantity')->nullable();
            $table->string('bpperpack')->nullable();
            $table->string('price')->nullable();
            $table->string('price_raw')->nullable();
            $table->integer('google_product_category')->default(6552);
            $table->string('brand')->default('PHARMEX');
            $table->string('sku')->nullable();
            $table->string('stock')->nullable()->default('In Stock');
            $table->text('meta')->nullable();
            $table->integer('UserID')->nullable()->default(4);
            $table->tinyInteger('status')->default(0);
            $table->string('slung')->nullable();
            $table->text('content')->nullable();
            $table->string('image')->nullable();
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
