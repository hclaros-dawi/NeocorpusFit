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
        Schema::create('pasos_receta', function (Blueprint $table) {
            $table->id('id_paso');
            $table->unsignedBigInteger('id_receta');
            $table->integer('orden');
            $table->text('descripcion');            
            $table->timestamps();

            $table->foreign('id_receta')->references('id_receta')->on('recetas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasos_receta');
    }
};
