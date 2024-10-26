<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PokemonRequest;
use App\Models\Pokemon;
use Illuminate\Http\Request;

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
}
