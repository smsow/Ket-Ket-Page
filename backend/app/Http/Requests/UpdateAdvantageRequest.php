<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdvantageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titre' => 'sometimes|required|string|max:255',
            'sous_titre' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'sous_titre1' => 'sometimes|required|string|max:255',
            'description1' => 'sometimes|required|string',
            'sous_titre2' => 'sometimes|required|string|max:255',
            'description2' => 'sometimes|required|string',
            'sous_titre3' => 'sometimes|required|string|max:255',
            'description3' => 'sometimes|required|string',
            'sous_titre4' => 'sometimes|required|string|max:255',
            'description4' => 'sometimes|required|string',
            'sous_titre5' => 'sometimes|required|string|max:255',
            'description5' => 'sometimes|required|string',
            'sous_titre6' => 'sometimes|required|string|max:255',
            'description6' => 'sometimes|required|string',
        ];
    }

    public function messages()
    {
        return [
            'titre.sometimes' => 'Le titre est parfois requis.',
            'sous_titre.sometimes' => 'Le sous-titre est parfois requis.',
            'description.sometimes' => 'La description est parfois requise.',
            'sous_titre1.sometimes' => 'Le sous-titre 1 est parfois requis.',
            'description1.sometimes' => 'La description 1 est parfois requise.',
            'sous_titre2.sometimes' => 'Le sous-titre 2 est parfois requis.',
            'description2.sometimes' => 'La description 2 est parfois requise.',
            'sous_titre3.sometimes' => 'Le sous-titre 3 est parfois requis.',
            'description3.sometimes' => 'La description 3 est parfois requise.',
            'sous_titre4.sometimes' => 'Le sous-titre 4 est parfois requis.',
            'description4.sometimes' => 'La description 4 est parfois requise.',
            'sous_titre5.sometimes' => 'Le sous-titre 5 est parfois requis.',
            'description5.sometimes' => 'La description 5 est parfois requise.',
            'sous_titre6.sometimes' => 'Le sous-titre 6 est parfois requis.',
            'description6.sometimes' => 'La description 6 est parfois requise.',
        ];
    }
}
