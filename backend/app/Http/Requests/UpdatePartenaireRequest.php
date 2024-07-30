<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePartenaireRequest extends FormRequest
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
            'title' => 'sometimes|string|max:255',
            'subtitle' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'cart_description1' => 'sometimes|string',
            'cart_description2' => 'sometimes|string',
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
            'title.sometimes' => 'Le titre est requis dans certaines conditions.',
            'title.string' => 'Le titre doit être une chaîne de caractères.',
            'title.max' => 'Le titre ne peut pas dépasser 255 caractères.',
            'subtitle.sometimes' => 'Le sous-titre est requis dans certaines conditions.',
            'subtitle.string' => 'Le sous-titre doit être une chaîne de caractères.',
            'subtitle.max' => 'Le sous-titre ne peut pas dépasser 255 caractères.',
            'description.sometimes' => 'La description est requise dans certaines conditions.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'cart_description1.sometimes' => 'La description de la carte 1 est requise dans certaines conditions.',
            'cart_description1.string' => 'La description de la carte 1 doit être une chaîne de caractères.',
            'cart_description2.sometimes' => 'La description de la carte 2 est requise dans certaines conditions.',
            'cart_description2.string' => 'La description de la carte 2 doit être une chaîne de caractères.',
        ];
    }
}
