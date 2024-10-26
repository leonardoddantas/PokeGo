<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PokemonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'type' => 'required|string|max:50',
            'description' => 'nullable|string|max:255',
            'location' => 'required|string|max:100',
            'rarity' => 'required|in:common,rare,legendary',
            'base_points' => 'required|integer|min:0',
            'health_points' => 'required|integer|min:0',
            'attack' => 'required|integer|min:0',
            'defense' => 'required|integer|min:0',
        ];
    }
}
