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
        Schema::table('services', function (Blueprint $table) {
            //
            $table->string('activite_id')->after('description');
            $table->string('partenaire_sport_id')->after('activite_id');
            $table->string('horaire')->after('partenaire_sport_id');
            $table->decimal('prix', 8, 2)->after('horaire');
            $table->string('type')->after('prix');
            $table->string('jours')->after('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            //
            $table->dropColumn(['activite_id', 'partenaire_sport_id', 'horaire', 'prix', 'type', 'jours']);

        });
    }
};
