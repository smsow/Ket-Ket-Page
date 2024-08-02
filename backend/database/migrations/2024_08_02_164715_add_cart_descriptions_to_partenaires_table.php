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
        Schema::table('partenaires', function (Blueprint $table) {
            $table->text('cart_description3')->nullable()->after('cart_description2');
            $table->text('cart_description4')->nullable()->after('cart_description3');
            $table->text('cart_description5')->nullable()->after('cart_description4');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partenaires', function (Blueprint $table) {
            $table->dropColumn('cart_description3');
            $table->dropColumn('cart_description4');
            $table->dropColumn('cart_description5');
        });
    }
};
