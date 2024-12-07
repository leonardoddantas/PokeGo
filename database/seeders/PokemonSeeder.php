<?php

namespace Database\Seeders;

use App\Models\Pokemon;
use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pokémons lendários
        Pokemon::create([
            'name' => 'Pikachu',
            'type' => 'Elétrico',
            'description' => 'Pikachu é um pokémon elétrico rápido, travesso e sempre alegre.',
            'location' => 'Campus',
            'rarity' => 'legendary',
            'base_points' => 100,
            'health_points' => 150,
            'attack' => 80,
            'defense' => 70,
            'latitude' => -6.469000,
            'longitude' => -36.940000,
        ]);

        Pokemon::create([
            'name' => 'Iapur',
            'type' => 'Ar',
            'description' => 'Iapur é uma pokémon de ar agressiva e rápida, com memória fotográfica e poder baseado em conhecimento.',
            'location' => 'Campus',
            'rarity' => 'legendary',
            'base_points' => 100,
            'health_points' => 140,
            'attack' => 75,
            'defense' => 65,
            'latitude' => -6.460000,
            'longitude' => -36.937200,
        ]);

        Pokemon::create([
            'name' => 'Katita',
            'type' => 'Ar',
            'description' => 'Katita é uma pokémon de ar calma e empática, capaz de ressoar o Eco do Oceano.',
            'location' => 'Campus',
            'rarity' => 'legendary',
            'base_points' => 100,
            'health_points' => 145,
            'attack' => 70,
            'defense' => 80,
            'latitude' => -6.469000,
            'longitude' => -36.900000,
        ]);

        Pokemon::create([
            'name' => 'Bluin',
            'type' => 'Água',
            'description' => 'Bluin é uma pokémon de água fofa, com uma brisa congelante e toque de brilho lunar.',
            'location' => 'Campus',
            'rarity' => 'legendary',
            'base_points' => 100,
            'health_points' => 130,
            'attack' => 85,
            'defense' => 75,
            'latitude' => -6.461000,
            'longitude' => -36.924000,
        ]);

        // Pokémons raros
        Pokemon::create([
            'name' => 'Cirol',
            'type' => 'Terra',
            'description' => 'Cirol é um Pokémon de terra estrategista, que usa sua timidez e o poder do Lança-Esporos de forma tática.',
            'location' => 'Campus',
            'rarity' => 'rare',
            'base_points' => 80,
            'health_points' => 120,
            'attack' => 70,
            'defense' => 60,
            'latitude' => -6.465000,
            'longitude' => -36.938000,
        ]);

        Pokemon::create([
            'name' => 'Mazira',
            'type' => 'Água',
            'description' => 'Mazira é uma pokémon de água tranquila e empática, que domina o poder do Eco do Oceano.',
            'location' => 'Campus',
            'rarity' => 'rare',
            'base_points' => 85,
            'health_points' => 125,
            'attack' => 65,
            'defense' => 70,
            'latitude' => -6.469000,
            'longitude' => -36.938800,
        ]);

        Pokemon::create([
            'name' => 'Iufire',
            'type' => 'Fogo',
            'description' => 'Iufire é um Pokémon de fogo corajoso e competitivo, com o poder intenso do Grito Vulcânico.',
            'location' => 'Campus',
            'rarity' => 'rare',
            'base_points' => 90,
            'health_points' => 130,
            'attack' => 85,
            'defense' => 60,
            'latitude' => -6.469500,
            'longitude' => -36.940000,
        ]);
    }
}
