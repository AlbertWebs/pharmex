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
        Schema::create('expireds', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name')->nullable();
            $table->string('generic_name')->nullable();
            $table->string('pharmacological_class')->nullable();
            $table->string('category')->nullable();
            $table->text('dosage_form')->nullable();
            $table->string('strength')->nullable();
            $table->string('batch_no')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('packsize')->nullable();
            $table->string('packs')->nullable();
            $table->string('bp_per_pack')->nullable();
            $table->string('total_cost')->nullable();
            $table->string('total_quantity')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expireds');
    }
};
