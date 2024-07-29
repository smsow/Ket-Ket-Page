<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdvantageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titre' => 'required|string|max:255',
            'sous_titre' => 'required|string|max:255',
            'description' => 'required|string',
            'sous_titre1' => 'required|string|max:255',
            'description1' => 'required|string',
            'sous_titre2' => 'required|string|max:255',
            'description2' => 'required|string',
            'sous_titre3' => 'required|string|max:255',
            'description3' => 'required|string',
            'sous_titre4' => 'required|string|max:255',
            'description4' => 'required|string',
            'sous_titre5' => 'required|string|max:255',
            'description5' => 'required|string',
            'sous_titre6' => 'required|string|max:255',
            'description6' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Le titre est obligatoire.',
            'sous_titre.required' => 'Le sous-titre est obligatoire.',
            'description.required' => 'La description est obligatoire.',
            'sous_titre1.required' => 'Le sous-titre 1 est obligatoire.',
            'description1.required' => 'La description 1 est obligatoire.',
            'sous_titre2.required' => 'Le sous-titre 2 est obligatoire.',
            'description2.required' => 'La description 2 est obligatoire.',
            'sous_titre3.required' => 'Le sous-titre 3 est obligatoire.',
            'description3.required' => 'La description 3 est obligatoire.',
            'sous_titre4.required' => 'Le sous-titre 4 est obligatoire.',
            'description4.required' => 'La description 4 est obligatoire.',
            'sous_titre5.required' => 'Le sous-titre 5 est obligatoire.',
            'description5.required' => 'La description 5 est obligatoire.',
            'sous_titre6.required' => 'Le sous-titre 6 est obligatoire.',
            'description6.required' => 'La description 6 est obligatoire.',
        ];
    }
}
