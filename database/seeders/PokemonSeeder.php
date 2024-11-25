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
            'name' => 'Leonardo',
            'type' => 'Programação',
            'description' => 'Gosto de programar, focado em desenvolvimento.',
            'location' => 'Campus',
            'rarity' => 'legendary',
            'base_points' => 100,
            'health_points' => 150,
            'attack' => 80,
            'defense' => 70,
            'latitude' => -6.467085,
            'longitude' => -36.937022,
        ]);

        Pokemon::create([
            'name' => 'Katarina',
            'type' => 'Programação',
            'description' => 'Futura médica, mas apaixonada por programação.',
            'location' => 'Campus',
            'rarity' => 'legendary',
            'base_points' => 100,
            'health_points' => 140,
            'attack' => 75,
            'defense' => 65,
            'latitude' => -6.467200,
            'longitude' => -36.937200,
        ]);

        Pokemon::create([
            'name' => 'Ianny',
            'type' => 'Programação',
            'description' => 'Estudante de programação e futura médica.',
            'location' => 'Campus',
            'rarity' => 'legendary',
            'base_points' => 100,
            'health_points' => 145,
            'attack' => 70,
            'defense' => 80,
            'latitude' => -6.467900,
            'longitude' => -36.937500,
        ]);

        Pokemon::create([
            'name' => 'Ingridy',
            'type' => 'Programação',
            'description' => 'Apaixonada por tecnologia e saúde.',
            'location' => 'Campus',
            'rarity' => 'legendary',
            'base_points' => 100,
            'health_points' => 130,
            'attack' => 85,
            'defense' => 75,
            'latitude' => -6.468800,
            'longitude' => -36.937800,
        ]);

        // Pokémons raros
        Pokemon::create([
            'name' => 'Ciro',
            'type' => 'Programação',
            'description' => 'Professor de API.',
            'location' => 'Campus',
            'rarity' => 'rare',
            'base_points' => 80,
            'health_points' => 120,
            'attack' => 70,
            'defense' => 60,
            'latitude' => -6.468700,
            'longitude' => -36.938000,
        ]);

        Pokemon::create([
            'name' => 'Maíra',
            'type' => 'Documentos e Gestão de Projetos',
            'description' => 'Professor de Documentação e Gestão de Projetos.',
            'location' => 'Campus',
            'rarity' => 'rare',
            'base_points' => 85,
            'health_points' => 125,
            'attack' => 65,
            'defense' => 70,
            'latitude' => -6.469000,
            'longitude' => -36.938200,
        ]);

        Pokemon::create([
            'name' => 'Iuri',
            'type' => 'Redes e React',
            'description' => 'Professor de Redes e React.',
            'location' => 'Campus',
            'rarity' => 'rare',
            'base_points' => 90,
            'health_points' => 130,
            'attack' => 85,
            'defense' => 60,
            'latitude' => -6.468500,
            'longitude' => -36.938400,
        ]);

        // Pokémons comuns
        Pokemon::create([
            'name' => 'Huliane',
            'type' => 'Programação',
            'description' => 'Professor de Programação.',
            'location' => 'Campus',
            'rarity' => 'common',
            'base_points' => 60,
            'health_points' => 100,
            'attack' => 55,
            'defense' => 60,
            'latitude' => -6.468700,
            'longitude' => -36.938600,
        ]);

        Pokemon::create([
            'name' => 'Daniel',
            'type' => 'Programação',
            'description' => 'Professor de Programação.',
            'location' => 'Campus',
            'rarity' => 'common',
            'base_points' => 60,
            'health_points' => 105,
            'attack' => 60,
            'defense' => 65,
            'latitude' => -6.468900,
            'longitude' => -36.938800,
        ]);
    }
}
