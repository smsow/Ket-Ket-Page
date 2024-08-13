<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactPartenaireTable extends Migration
{
    public function up()
    {
        Schema::create('contact_partenaire', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('numero');
            $table->string('mail');
            $table->string('position_hierarchique');
            $table->string('poste');
            $table->string('metier');
            $table->date('date_creation');
            $table->date('date_modification')->nullable();
            $table->string('adresse');
            $table->string('quartier');
            $table->string('images')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_partenaire');
    }
}
