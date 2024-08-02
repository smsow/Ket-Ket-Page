<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMediaItemRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'image' => 'required|string',
            'description' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'L\'image est obligatoire.',
            'image.string' => 'L\'image doit être une chaîne de caractères.',
            'description.string' => 'La description doit être une chaîne de caractères.',
        ];
    }
}
