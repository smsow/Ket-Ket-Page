<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
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
            'title' => 'sometimes|string|max:255',
            'subtitle' => 'sometimes|string|max:255',
            'image' => 'sometimes|file|mimes:jpeg,png,jpg|max:2048', // Validate file type and size
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
            'title.string' => 'Le titre doit être une chaîne de caractères.',
            'subtitle.string' => 'Le sous-titre doit être une chaîne de caractères.',
            'image.file' => 'L\'image doit être un fichier.',
            'image.mimes' => 'L\'image doit être un fichier de type : jpeg, png, jpg.',
            'image.max' => 'L\'image ne peut pas dépasser 2 Mo.',
        ];
    }
}