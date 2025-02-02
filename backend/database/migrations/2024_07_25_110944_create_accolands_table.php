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
        Schema::create('accolands', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->string('image');
            $table->text('description1');
            $table->string('image1');
            $table->text('description2');
            $table->string('image2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accolands');
    }
};
