<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('canasta_ingrediente', function (Blueprint $table) {
            $table->decimal('subtotal', 10, 2)->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('canasta_ingrediente', function (Blueprint $table) {
            $table->dropColumn('subtotal');
        });
    }
};
