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
        Schema::create('lotes', function (Blueprint $table) {
            $table->id();
            $table->string('status_lote');
            $table->integer('num_manzana');
            $table->integer('num_lote');
            $table->string('zona');
            $table->string('area_lote');
            $table->string('precio_con');
        });
 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lotes');
    }
};
