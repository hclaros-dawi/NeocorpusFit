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
        Schema::create('canasta_ingrediente', function (Blueprint $table) {
            $table->unsignedBigInteger('id_canasta');
            $table->unsignedBigInteger('id_ingrediente');
            $table->float('cantidad');
            $table->string('unidad_base');
            $table->float('precio_total');
            $table->timestamps();

            $table->foreign('id_canasta')->references('id_canasta')->on('canastas');
            $table->foreign('id_ingrediente')->references('id_ingrediente')->on('ingredientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('canasta_ingrediente');
    }
};
