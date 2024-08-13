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
        Schema::table('prendre_rendez_vous', function (Blueprint $table) {
            //
            $table->text('message')->after('motif'); // Ajoute la colonne "message"

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prendre_rendez_vous', function (Blueprint $table) {
            //
        });
    }
};
