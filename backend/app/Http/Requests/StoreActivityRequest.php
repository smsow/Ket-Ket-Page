<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreActivityRequest extends FormRequest
{
    /**
     * Détermine si l'utilisateur est autorisé à faire cette requête.
     */
    public function authorize(): bool
    {
        return true; // Modifiez cette méthode si vous avez besoin d'une logique d'autorisation
    }

    /**
     * Obtient les règles de validation qui s'appliquent à la requête.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'text' => 'required|string|max:255',
            'image' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000', // Ajout de la règle de validation pour la description
        ];
    }

    /**
     * Obtient les messages de validation personnalisés.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'text.required' => 'Le texte est obligatoire.',
            'text.string' => 'Le texte doit être une chaîne de caractères.',
            'text.max' => 'Le texte ne peut pas dépasser 255 caractères.',
            'image.required' => 'L\'image est obligatoire.',
            'image.string' => 'L\'image doit être une chaîne de caractères.',
            'image.max' => 'L\'image ne peut pas dépasser 255 caractères.',
            'description.nullable' => 'La description est obligatoire.', // Message pour la description
            'description.string' => 'La description doit être une chaîne de caractères.', // Message pour la description
            'description.max' => 'La description ne peut pas dépasser 1000 caractères.', // Message pour la description
        ];
    }
}
