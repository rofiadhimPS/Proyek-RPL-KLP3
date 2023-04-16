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
        Schema::create('product_benefits', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('tipe_mobil');
            $table->string('tahun');
            $table->string('warna');
            $table->integer('seat');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_benefits');
    }
};
