<?php

use App\Http\Controllers\api\PokemonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/pokemons')->name('pokemons')->group(function () {

    Route::get('', [PokemonController::class, 'index']);

    Route::post('', [PokemonController::class, 'store']);

    Route::name('.show')->get('/{id}', [PokemonController::class, 'show']);

    Route::put('/{id}', [PokemonController::class, 'update']);

    Route::delete('/{id}', [PokemonController::class, 'destroy']);
});
