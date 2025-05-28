<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('canastas', function (Blueprint $table) {
            $table->id('id_canasta');
            $table->string('nombre');
            $table->text('descripcion');
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();

            $table->foreign('menu_id')->references('id_menu')->on('menus');
            $table->foreign('categoria_id')->references('id_categoria')->on('categorias');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('canastas');
    }
};
