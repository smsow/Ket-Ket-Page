<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartnerForm3Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Autorise l'exécution de cette requête
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
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'numero_telephone' => 'required|string|max:15',
            'date_disponible' => 'required|date',
            'nom_entreprise' => 'required|string|max:255',
            'description_entreprise' => 'nullable|string',
        ];
    }

    /**
     * Get the custom messages for validation errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'prenom.required' => 'Le prénom est requis.',
            'prenom.string' => 'Le prénom doit être une chaîne de caractères.',
            'prenom.max' => 'Le prénom ne peut pas dépasser 255 caractères.',

            'nom.required' => 'Le nom est requis.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne peut pas dépasser 255 caractères.',

            'email.required' => 'L\'adresse e-mail est requise.',
            'email.email' => 'L\'adresse e-mail doit être valide.',
            'email.max' => 'L\'adresse e-mail ne peut pas dépasser 255 caractères.',

            'numero_telephone.required' => 'Le numéro de téléphone est requis.',
            'numero_telephone.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
            'numero_telephone.max' => 'Le numéro de téléphone ne peut pas dépasser 15 caractères.',

            'date_disponible.required' => 'La date de disponibilité est requise.',
            'date_disponible.date' => 'La date de disponibilité doit être une date valide.',

            'nom_entreprise.required' => 'Le nom de l\'entreprise est requis.',
            'nom_entreprise.string' => 'Le nom de l\'entreprise doit être une chaîne de caractères.',
            'nom_entreprise.max' => 'Le nom de l\'entreprise ne peut pas dépasser 255 caractères.',

            'description_entreprise.string' => 'La description de l\'entreprise doit être une chaîne de caractères.',
        ];
    }
}
