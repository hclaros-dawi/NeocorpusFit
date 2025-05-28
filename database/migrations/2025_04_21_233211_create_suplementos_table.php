<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('suplementos', function (Blueprint $table) {
            $table->id('id_suplemento');
            $table->string('nombre');
            $table->unsignedBigInteger('categoria_id');
            $table->text('descripcion');
            $table->boolean('usa_calculadora')->default(false);
            $table->string('calculadora_url')->nullable();
            $table->timestamps();

            $table->foreign('categoria_id')->references('id_categoria')->on('categorias');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('suplementos');
    }
};
