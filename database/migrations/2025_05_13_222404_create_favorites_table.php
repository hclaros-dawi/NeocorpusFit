<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFavoriteIdToRecetasTable extends Migration
{
    public function up()
    {
        Schema::table('recetas', function (Blueprint $table) {
            // Agregar la columna favorite_id que es una clave foránea que hace referencia a la tabla favorites
            $table->foreignId('favorite_id')
                ->nullable() // Permitimos que pueda ser nulo inicialmente
                ->constrained('favorites') // Relacionamos con la tabla 'favorites'
                ->onDelete('cascade'); // Si un favorite es eliminado, las recetas asociadas también serán eliminadas
        });
    }

    public function down()
    {
        // Si la migración es revertida, eliminamos la columna favorite_id
        Schema::table('recetas', function (Blueprint $table) {
            $table->dropColumn('favorite_id');
        });
    }
}
