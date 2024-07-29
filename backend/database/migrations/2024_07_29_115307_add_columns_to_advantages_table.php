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
        Schema::table('advantages', function (Blueprint $table) {
            // Ajouter les nouvelles colonnes avec respect des longueurs
            $table->string('sous_titre1')->after('description')->length(255);
            $table->text('description1')->after('sous_titre1');
            $table->string('sous_titre2')->after('description1')->length(255);
            $table->text('description2')->after('sous_titre2');

            $table->string('sous_titre3')->after('description2')->length(255);
            $table->text('description3')->after('sous_titre3');
            $table->string('sous_titre4')->after('description3')->length(255);
            $table->text('description4')->after('sous_titre4');

            $table->string('sous_titre5')->after('description4')->length(255);
            $table->text('description5')->after('sous_titre5');
            $table->string('sous_titre6')->after('description5')->length(255);
            $table->text('description6')->after('sous_titre6');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('advantages', function (Blueprint $table) {
            $table->dropColumn([
                'sous_titre1',
                'description1',
                'sous_titre2',
                'description2',
                'sous_titre3',
                'description3',
                'sous_titre4',
                'description4',
                'sous_titre5',
                'description5',
                'sous_titre6',
                'description6',
            ]);
        });
    }
};
