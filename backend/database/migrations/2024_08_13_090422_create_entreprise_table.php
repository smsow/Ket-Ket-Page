<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepriseTable extends Migration
{
    public function up()
    {
        Schema::create('entreprise', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('numero');
            $table->string('siege');
            $table->string('secteur_activite');
            $table->integer('nombre_employes');
            $table->string('quartier');
            $table->date('date_creation');
            $table->date('date_modification')->nullable();
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->unsignedBigInteger('contact_id');

            $table->foreign('contact_id')->references('id')->on('contact_partenaire')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entreprise');
    }
}
