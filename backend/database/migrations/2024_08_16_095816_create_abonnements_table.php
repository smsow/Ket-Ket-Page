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
        Schema::create('abonnements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('service_id');
            $table->integer('duree');
            $table->date('date_fin');
            $table->date('date_creation');
            $table->string('type');
            $table->string('status');
            $table->date('date_debut');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnements');
    }
};
