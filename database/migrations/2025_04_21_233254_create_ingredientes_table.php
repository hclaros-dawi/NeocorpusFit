<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ingredientes', function (Blueprint $table) {
            $table->id('id_ingrediente');
            $table->string('nombre');
            $table->float('calorias');
            $table->float('proteinas');
            $table->float('carbohidratos');
            $table->float('grasas');
            $table->float('precio_estimado');
            $table->text('descripcion')->nullable();
            $table->string('unidad');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ingredientes');
    }
};
