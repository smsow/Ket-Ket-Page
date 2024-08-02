<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartenaireRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'cart_titre' => 'required|string',
            'cart_description1' => 'required|string',
            'cart_description2' => 'required|string',
            'cart_description3' => 'required|string', // Champ ajouté
            'cart_description4' => 'required|string', // Champ ajouté
            'cart_description5' => 'required|string', // Champ ajouté
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Le titre est obligatoire.',
            'subtitle.required' => 'Le sous-titre est obligatoire.',
            'description.required' => 'La description est obligatoire.',
            'cart_titre.required' => 'Le titre de la carte est obligatoire.',
            'cart_description1.required' => 'La description de la carte 1 est obligatoire.',
            'cart_description2.required' => 'La description de la carte 2 est obligatoire.',
            'cart_description3.required' => 'La description de la carte 3 est obligatoire.', // Message ajouté
            'cart_description4.required' => 'La description de la carte 4 est obligatoire.', // Message ajouté
            'cart_description5.required' => 'La description de la carte 5 est obligatoire.', // Message ajouté
        ];
    }
}
