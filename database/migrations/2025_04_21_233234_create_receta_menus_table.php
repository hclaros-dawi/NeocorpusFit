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
        Schema::create('receta_menu', function (Blueprint $table) {
            $table->unsignedBigInteger('id_receta');
            $table->unsignedBigInteger('id_menu');
            $table->integer('orden');
            $table->string('dia_semana');
            $table->string('tipo_comida');
            $table->string('enlace_receta')->nullable();
            $table->timestamps();

            $table->foreign('id_receta')->references('id_receta')->on('recetas');
            $table->foreign('id_menu')->references('id_menu')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receta_menu');
    }
};
