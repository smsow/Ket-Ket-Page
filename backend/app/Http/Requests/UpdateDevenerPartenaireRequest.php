<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDevenerPartenaireRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'sometimes|string|max:255',
            'subtitle' => 'sometimes|string|max:255',
            'cart_1' => 'sometimes|string|max:255',
            'cart_2' => 'sometimes|string|max:255',
            'cart_3' => 'sometimes|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'title.string' => 'Le titre doit être une chaîne de caractères.',
            'title.max' => 'Le titre ne doit pas dépasser 255 caractères.',

            'subtitle.string' => 'Le sous-titre doit être une chaîne de caractères.',
            'subtitle.max' => 'Le sous-titre ne doit pas dépasser 255 caractères.',

            'cart_1.string' => 'Cart 1 doit être une chaîne de caractères.',
            'cart_1.max' => 'Cart 1 ne doit pas dépasser 255 caractères.',

            'cart_2.string' => 'Cart 2 doit être une chaîne de caractères.',
            'cart_2.max' => 'Cart 2 ne doit pas dépasser 255 caractères.',

            'cart_3.string' => 'Cart 3 doit être une chaîne de caractères.',
            'cart_3.max' => 'Cart 3 ne doit pas dépasser 255 caractères.',
        ];
    }
}
