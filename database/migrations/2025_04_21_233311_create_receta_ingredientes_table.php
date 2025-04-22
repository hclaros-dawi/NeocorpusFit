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
        Schema::create('receta_ingrediente', function (Blueprint $table) {
            $table->unsignedBigInteger('id_receta');
            $table->unsignedBigInteger('id_ingrediente');
            $table->float('cantidad');
            $table->string('unidad_medida');
            $table->timestamps();

            $table->foreign('id_receta')->references('id_receta')->on('recetas');
            $table->foreign('id_ingrediente')->references('id_ingrediente')->on('ingredientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receta_ingrediente');
    }
};
