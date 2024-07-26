<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Change to true to allow this request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'image' => 'required|string',
        ];
    }

    /**
     * Get custom validation messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Le champ titre est obligatoire.',
            'title.string' => 'Le titre doit être une chaîne de caractères.',
            'title.max' => 'Le titre ne peut pas dépasser 255 caractères.',
            'subtitle.required' => 'Le champ sous-titre est obligatoire.',
            'subtitle.string' => 'Le sous-titre doit être une chaîne de caractères.',
            'subtitle.max' => 'Le sous-titre ne peut pas dépasser 255 caractères.',
            'image.required' => 'Le champ image est obligatoire.',
            'image.string' => 'L\'image doit être une chaîne de caractères.',
        ];
    }
}
