<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdresseIdToEntrepriseTable extends Migration
{
    public function up()
    {
        Schema::table('entreprise', function (Blueprint $table) {
            $table->unsignedBigInteger('adresse_id')->nullable()->after('contact_id');

            $table->foreign('adresse_id')
                ->references('id')
                ->on('adresses')
                ->onDelete('set null');
             });
    }

    public function down()
    {
        Schema::table('entreprise', function (Blueprint $table) {
            $table->dropForeign(['adresse_id']);
            $table->dropColumn('adresse_id');
        });
    }
}
