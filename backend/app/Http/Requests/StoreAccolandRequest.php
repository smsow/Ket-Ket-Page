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
            'description1' => 'nullable|string|max:255',
            'image1' => 'nullable|string',
            'description2' => 'nullable|string|max:255',
            'image2' => 'nullable|string',
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
            'description1.string' => 'La description1 doit être une chaîne de caractères.',
            'description1.max' => 'La description1 ne peut pas dépasser 255 caractères.',
            'image1.string' => 'L\'image1 doit être une chaîne de caractères.',
            'description2.string' => 'La description2 doit être une chaîne de caractères.',
            'description2.max' => 'La description2 ne peut pas dépasser 255 caractères.',
            'image2.string' => 'L\'image2 doit être une chaîne de caractères.',
        ];
    }
}
