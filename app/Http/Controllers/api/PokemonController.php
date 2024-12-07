<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PokemonRequest;
use App\Models\Pokemon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        return $pokemons;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PokemonRequest $request)
    {
        $pokemon = Pokemon::create($request->validated());
        $corpo = ['location' => route('pokemons.show', $pokemon->id)];
        return response($corpo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pokemon = Pokemon::find($id);
        if ($pokemon)
            return $pokemon;
        else
            return response('', 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PokemonRequest $request, $id)
    {
        $pokemon = Pokemon::find($id);
        $pokemon->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pokemon = Pokemon::find($id);
        if ($pokemon)
            $pokemon->delete();
        else
            return response(null, 204);
    }

    public function getNearbyPokemons($latitude, $longitude)
    {
        $radius = 0.001;

        $pokemons = Pokemon::all()->filter(function ($pokemon) use ($latitude, $longitude, $radius) {
            $distance = sqrt(pow($pokemon->latitude - $latitude, 2) + pow($pokemon->longitude - $longitude, 2));
            return $distance <= $radius;
        });

        return response()->json($pokemons->values());
    }

    public function capture($id, Request $request)
    {
        try {
            $pokemon = Pokemon::find($id);
            if (!$pokemon) {
                return response()->json(['message' => 'Pokémon não encontrado'], 404);
            }

            $userId = $request->input('user_id');

            if (!$userId) {
                return response()->json(['message' => 'ID do usuário não encontrado'], 400);
            }

            // Encontrar o usuário pelo ID
            $user = User::find($userId);
            if (!$user) {
                return response()->json(['message' => 'Usuário não encontrado'], 404);
            }

            // Verificar se o usuário já capturou esse Pokémon
            if ($user->pokemons()->where('pokemon_id', $id)->exists()) {
                return response()->json(['message' => 'Você já capturou esse Pokémon!'], 400);
            }

            // Associar o Pokémon ao usuário
            $user->pokemons()->attach($pokemon);

            return response()->json(['message' => 'Pokémon capturado com sucesso!']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Erro ao capturar o Pokémon: ' . $e->getMessage()], 500);
        }
    }
}
