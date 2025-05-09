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
        Schema::table('canasta_ingrediente', function (Blueprint $table) {
             if (Schema::hasColumn('canasta_ingrediente', 'precio_total')) {
                $table->dropColumn('precio_total');
            }
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('canasta_ingrediente', function (Blueprint $table) {
            $table->float('precio_total')->nullable(); // Podés ajustarlo según tu necesidad
        });    }
};
