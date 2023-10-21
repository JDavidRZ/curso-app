<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Expr\FuncCall;

class StoreVideogame extends FormRequest
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
            'name_game' => 'required|min:5|max:10',
        ];
    }

    public function attributes()
    {
        return[
            'name_game' => 'videogame name',
        ];
    }

    public function messages()
    {
        return[
            'name_game.required' => 'El nombre del videojuego no puede estar vacio',
        ];
    }
}