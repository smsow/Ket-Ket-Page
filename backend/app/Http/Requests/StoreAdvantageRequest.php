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
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Le titre est obligatoire.',
            'sous_titre.required' => 'Le sous-titre est obligatoire.',
            'description.required' => 'La description est obligatoire.',
        ];
    }
}
