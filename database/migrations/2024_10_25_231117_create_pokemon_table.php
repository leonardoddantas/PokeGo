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
            $table->string('type'); // Tipo (ex.: Matemática, Ciências)
            $table->text('description')->nullable();
            $table->string('location'); // Localização no campus
            $table->string('rarity'); // Raridade (ex.: comum, raro)
            $table->integer('base_points'); // Pontos concedidos ao jogador ao capturar o pokemon
            $table->integer('health_points'); // Pontos de saúde
            $table->integer('attack'); // Valor de ataque
            $table->integer('defense'); // Valor de defesa
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
