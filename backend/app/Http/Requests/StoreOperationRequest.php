<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOperationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Autoriser cette requête pour tous les utilisateurs.
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'image' => 'required|string|max:255', // Le champ image est maintenant obligatoire
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Le titre est obligatoire.',
            'title.string' => 'Le titre doit être une chaîne de caractères.',
            'title.max' => 'Le titre ne doit pas dépasser 255 caractères.',
            'image.required' => 'L\'image est obligatoire.',
            'image.string' => 'Le chemin de l\'image doit être une chaîne de caractères.',
            'image.max' => 'Le chemin de l\'image ne doit pas dépasser 255 caractères.',
        ];
    }
}
