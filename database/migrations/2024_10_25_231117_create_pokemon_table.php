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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->text('description');
            $table->string('location');
            $table->string('rarity');
            $table->integer('base_points');
            $table->integer('health_points');
            $table->integer('attack');
            $table->integer('defense');
            $table->double('latitude');
            $table->double('longitude');
            $table->boolean('captured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
