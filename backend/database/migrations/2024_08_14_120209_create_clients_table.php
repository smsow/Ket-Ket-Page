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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('abonnement');
            $table->text('historique_paiement');
            $table->string('status');
            $table->unsignedBigInteger('entreprise_id');
            $table->date('date_creation');
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('entreprise_id')->references('id')->on('entreprise')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
