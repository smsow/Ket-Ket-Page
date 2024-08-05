<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOperationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Autoriser cette requête pour tous les utilisateurs.
    }

    public function rules(): array
    {
        return [
            'title' => 'sometimes|string|max:255',
            'image' => 'required|string|max:255', // Image obligatoire aussi pour la mise à jour
        ];
    }

    public function messages(): array
    {
        return [
            'title.string' => 'Le titre doit être une chaîne de caractères.',
            'title.max' => 'Le titre ne doit pas dépasser 255 caractères.',
            'image.required' => 'L\'image est obligatoire.',
            'image.string' => 'Le chemin de l\'image doit être une chaîne de caractères.',
            'image.max' => 'Le chemin de l\'image ne doit pas dépasser 255 caractères.',
        ];
    }
}
