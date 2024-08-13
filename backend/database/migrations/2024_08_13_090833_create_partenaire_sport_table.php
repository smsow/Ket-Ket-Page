<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartenaireSportTable extends Migration
{
    public function up()
    {
        Schema::create('partenaire_sport', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('numero');
            $table->string('address');
            $table->string('activites');
            $table->string('horaire');
            $table->string('equipements');
            $table->string('categorie');
            $table->string('quartier');
            $table->string('statut');
            $table->date('date_fin')->nullable();
            $table->date('date_creation');
            $table->date('date_modification')->nullable();
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->string('images')->nullable();
            $table->unsignedBigInteger('contact_id');
            $table->text('description')->nullable();

            $table->foreign('contact_id')->references('id')->on('contact_partenaire')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('partenaire_sport');
    }
}
