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
        Schema::create('recetas', function (Blueprint $table) {
            $table->id('id_receta');
            $table->string('nombre');
            $table->unsignedBigInteger('categoria_id');
            $table->integer('tiempo_preparacion');
            $table->string('dificultad');
            $table->string('imagen_url')->nullable();
            $table->timestamps();

            $table->foreign('categoria_id')->references('id_categoria')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recetas');
    }
};
