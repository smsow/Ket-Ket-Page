<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactPartenaireRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Return true to allow all users to make this request
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string|max:255',
            'numero' => 'required|numeric',
            'mail' => 'required|email',
            'position_hierarchique' => 'nullable|string|max:255',
            'poste' => 'nullable|string|max:255',
            'metier' => 'nullable|string|max:255',
            'date_creation' => 'nullable|date',
            'date_modification' => 'nullable|date',
            'adresse' => 'nullable|string|max:255',
            'quartier' => 'nullable|string|max:255',
            'images' => 'nullable|string', // Modification ici pour utiliser une chaîne de caractères
        ];
    }

    /**
     * Get the custom error messages for the validator.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom est requis.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne peut pas dépasser 255 caractères.',
            'numero.required' => 'Le numéro est requis.',
            'numero.numeric' => 'Le numéro doit être un nombre.',
            'mail.required' => 'L\'adresse e-mail est requise.',
            'mail.email' => 'L\'adresse e-mail doit être valide.',
            'position_hierarchique.string' => 'La position hiérarchique doit être une chaîne de caractères.',
            'position_hierarchique.max' => 'La position hiérarchique ne peut pas dépasser 255 caractères.',
            'poste.string' => 'Le poste doit être une chaîne de caractères.',
            'poste.max' => 'Le poste ne peut pas dépasser 255 caractères.',
            'metier.string' => 'Le métier doit être une chaîne de caractères.',
            'metier.max' => 'Le métier ne peut pas dépasser 255 caractères.',
            'date_creation.date' => 'La date de création doit être une date valide.',
            'date_modification.date' => 'La date de modification doit être une date valide.',
            'adresse.string' => 'L\'adresse doit être une chaîne de caractères.',
            'adresse.max' => 'L\'adresse ne peut pas dépasser 255 caractères.',
            'quartier.string' => 'Le quartier doit être une chaîne de caractères.',
            'quartier.max' => 'Le quartier ne peut pas dépasser 255 caractères.',
            'images.string' => 'Les images doivent être une chaîne de caractères.',
        ];
    }
}
