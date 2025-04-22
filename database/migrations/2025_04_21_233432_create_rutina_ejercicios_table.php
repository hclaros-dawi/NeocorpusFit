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
        Schema::create('rutina_ejercicio', function (Blueprint $table) {
            $table->unsignedBigInteger('id_rutina');
            $table->unsignedBigInteger('id_ejercicio');
            $table->string('dia_entreno');
            $table->integer('repeticiones');
            $table->integer('series');
            $table->integer('orden');            
            $table->timestamps();
            
            $table->foreign('id_rutina')->references('id_rutina')->on('rutinas');
            $table->foreign('id_ejercicio')->references('id_ejercicio')->on('ejercicios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutina_ejercicio');
    }
};
