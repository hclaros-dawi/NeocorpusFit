<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('canastas', function (Blueprint $table) {
            $table->decimal('precio_total', 8, 2)->default(0)->after('categoria_id');
        });
    }

    public function down(): void
    {
        Schema::table('canastas', function (Blueprint $table) {
            $table->dropColumn('precio_total');
        });
    }
};
