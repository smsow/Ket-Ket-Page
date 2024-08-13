<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePartnerForm3Request extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Autoriser cette requête
    }

    public function rules(): array
    {
        return [
            'prenom' => 'sometimes|required|string|max:255',
            'nom' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:partner_form3,email,' . $this->route('id'),
            'numero_telephone' => 'sometimes|required|string|max:20',
            'date_disponible' => 'sometimes|required|date',
            'nom_entreprise' => 'sometimes|required|string|max:255',
            'description_entreprise' => 'sometimes|required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'prenom.sometimes' => 'Le prénom est parfois requis.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'prenom.string' => 'Le prénom doit être une chaîne de caractères.',
            'prenom.max' => 'Le prénom ne peut pas dépasser 255 caractères.',

            'nom.sometimes' => 'Le nom est parfois requis.',
            'nom.required' => 'Le nom est obligatoire.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne peut pas dépasser 255 caractères.',

            'email.sometimes' => 'L\'email est parfois requis.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être une adresse valide.',
            'email.unique' => 'Cet email est déjà utilisé.',

            'numero_telephone.sometimes' => 'Le numéro de téléphone est parfois requis.',
            'numero_telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'numero_telephone.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
            'numero_telephone.max' => 'Le numéro de téléphone ne peut pas dépasser 20 caractères.',

            'date_disponible.sometimes' => 'La date disponible est parfois requise.',
            'date_disponible.required' => 'La date disponible est obligatoire.',
            'date_disponible.date' => 'La date disponible doit être une date valide.',

            'nom_entreprise.sometimes' => 'Le nom de l\'entreprise est parfois requis.',
            'nom_entreprise.required' => 'Le nom de l\'entreprise est obligatoire.',
            'nom_entreprise.string' => 'Le nom de l\'entreprise doit être une chaîne de caractères.',
            'nom_entreprise.max' => 'Le nom de l\'entreprise ne peut pas dépasser 255 caractères.',

            'description_entreprise.sometimes' => 'La description de l\'entreprise est parfois requise.',
            'description_entreprise.required' => 'La description de l\'entreprise est obligatoire.',
            'description_entreprise.string' => 'La description de l\'entreprise doit être une chaîne de caractères.',
        ];
    }
}
