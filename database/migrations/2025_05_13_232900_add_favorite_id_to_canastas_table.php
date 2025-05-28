<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFavoriteIdToCanastasTable extends Migration
{
    public function up()
    {
        Schema::table('canastas', function (Blueprint $table) {
            $table->foreignId('favorite_id')
                ->nullable()
                ->constrained('favorites')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('canastas', function (Blueprint $table) {
            $table->dropColumn('favorite_id');
        });
    }
}
