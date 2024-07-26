<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccolandRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'description' => 'required|string|max:255',
            'image' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'La description est obligatoire.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'description.max' => 'La description ne peut pas dépasser 255 caractères.',
            'image.required' => 'L\'image est obligatoire.',
            'image.string' => 'L\'image doit être une chaîne de caractères.',
        ];
    }
}
