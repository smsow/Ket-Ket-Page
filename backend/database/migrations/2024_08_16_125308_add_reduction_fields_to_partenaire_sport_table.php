<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReductionFieldsToPartenaireSportTable extends Migration
{
    public function up()
    {
        Schema::table('partenaire_sport', function (Blueprint $table) {
            $table->decimal('reduction_mensualite', 5, 2)->nullable()->after('description');
            $table->decimal('reduction_inscription', 5, 2)->nullable()->after('reduction_mensualite');
        });
    }

    public function down()
    {
        Schema::table('partenaire_sport', function (Blueprint $table) {
            $table->dropColumn(['reduction_mensualite', 'reduction_inscription']);
        });
    }
}
