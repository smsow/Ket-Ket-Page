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
        ];
    }

    public function messages()
    {
        return [
            'titre.sometimes' => 'Le titre est parfois requis.',
            'sous_titre.sometimes' => 'Le sous-titre est parfois requis.',
            'description.sometimes' => 'La description est parfois requise.',
        ];
    }
}
