<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('canastas', function (Blueprint $table) {
            $table->string('nombre')->unique()->change();
        });
    }

    public function down(): void
    {
        Schema::table('canastas', function (Blueprint $table) {
            $table->dropUnique(['nombre']);
        });
    }
};
