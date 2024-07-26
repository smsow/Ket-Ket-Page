<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccolandRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'description' => 'sometimes|required|string|max:255',
            'image' => 'sometimes|required|string',
        ];
    }

    public function messages()
    {
        return [
            'description.sometimes' => 'La description est parfois requise.',
            'description.required' => 'La description est obligatoire.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'description.max' => 'La description ne peut pas dépasser 255 caractères.',
            'image.sometimes' => 'L\'image est parfois requise.',
            'image.required' => 'L\'image est obligatoire.',
            'image.string' => 'L\'image doit être une chaîne de caractères.',
        ];
    }
}
