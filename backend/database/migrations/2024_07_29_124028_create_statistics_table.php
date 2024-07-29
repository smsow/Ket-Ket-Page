<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->id(); // ID auto-incrémenté

            // Colonnes numériques
            $table->integer('clients_satisfaits')->default(750); // Clients satisfaits
            $table->integer('avis_rares')->default(24); // Avis rares
            $table->integer('annees_experience')->default(8); // Années d'expérience
            $table->integer('sports_offerts')->default(20); // Sports offerts

            // Colonnes chaînes de caractères
            $table->string('additional_column1')->default(''); // Exemple de colonne supplémentaire
            $table->string('additional_column2')->default(''); // Exemple de colonne supplémentaire
            $table->string('additional_column3')->default(''); // Exemple de colonne supplémentaire
            $table->string('additional_column4')->default(''); // Exemple de colonne supplémentaire

            $table->timestamps(); // Timestamps (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistics');
    }
}
