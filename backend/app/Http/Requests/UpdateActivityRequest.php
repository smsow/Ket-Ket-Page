<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateActivityRequest extends FormRequest
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
            'text' => 'sometimes|string|max:255',
            'image' => 'sometimes|string|max:255',
            'description' => 'sometimes|string|max:1000', // Ajout de la validation pour description
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
            'text.sometimes' => 'Le texte est optionnel.',
            'text.string' => 'Le texte doit être une chaîne de caractères.',
            'text.max' => 'Le texte ne peut pas dépasser 255 caractères.',
            'image.sometimes' => 'L\'image est optionnelle.',
            'image.string' => 'L\'image doit être une chaîne de caractères.',
            'image.max' => 'L\'image ne peut pas dépasser 255 caractères.',
            'description.sometimes' => 'La description est optionnelle.', // Message pour la description
            'description.string' => 'La description doit être une chaîne de caractères.', // Message pour la description
            'description.max' => 'La description ne peut pas dépasser 1000 caractères.', // Message pour la description
        ];
    }
}
