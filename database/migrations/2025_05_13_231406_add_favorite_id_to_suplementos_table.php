<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('suplementos', function (Blueprint $table) {
            $table->foreignId('favorite_id')->nullable()->constrained('favorites')->onDelete('cascade');
        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('suplementos', function (Blueprint $table) {
            //
        });
    }
};
