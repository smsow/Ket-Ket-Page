<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartnerForm1Request extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:partners_form1,email',
            'numero_telephone' => 'required|string|max:15',
            'date_disponible' => 'required|date',
            'nom_entreprise' => 'required|string|max:255',
            'position_entreprise' => 'required|string|max:255',
            'description_entreprise' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'prenom.required' => 'Le prénom est obligatoire.',
            'prenom.string' => 'Le prénom doit être une chaîne de caractères.',
            'prenom.max' => 'Le prénom ne doit pas dépasser 255 caractères.',

            'nom.required' => 'Le nom est obligatoire.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne doit pas dépasser 255 caractères.',

            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être une adresse email valide.',
            'email.unique' => 'L\'email existe déjà dans notre base de données.',

            'numero_telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'numero_telephone.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
            'numero_telephone.max' => 'Le numéro de téléphone ne doit pas dépasser 15 caractères.',

            'date_disponible.required' => 'La date de disponibilité est obligatoire.',
            'date_disponible.date' => 'La date de disponibilité doit être une date valide.',

            'nom_entreprise.required' => 'Le nom de l\'entreprise est obligatoire.',
            'nom_entreprise.string' => 'Le nom de l\'entreprise doit être une chaîne de caractères.',
            'nom_entreprise.max' => 'Le nom de l\'entreprise ne doit pas dépasser 255 caractères.',

            'position_entreprise.required' => 'La position dans l\'entreprise est obligatoire.',
            'position_entreprise.string' => 'La position dans l\'entreprise doit être une chaîne de caractères.',
            'position_entreprise.max' => 'La position dans l\'entreprise ne doit pas dépasser 255 caractères.',

            'description_entreprise.required' => 'La description de l\'entreprise est obligatoire.',
            'description_entreprise.string' => 'La description de l\'entreprise doit être une chaîne de caractères.',
        ];
    }
}
