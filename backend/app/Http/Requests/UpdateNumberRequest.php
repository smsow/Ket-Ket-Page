<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNumberRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'number' => 'required|integer',
            'description' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'number.required' => 'Le champ numéro est obligatoire.',
            'number.integer' => 'Le champ numéro doit être un entier.',
            'description.string' => 'Le champ description doit être une chaîne de caractères.',
        ];
    }
}
