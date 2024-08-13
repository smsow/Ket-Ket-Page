<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartnerForm2Request extends FormRequest
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
            'email' => 'required|email|unique:partners_form2,email',
            'numero_telephone' => 'required|string|max:15',
            'date_disponible' => 'required|date',
            'description_entreprise' => 'required|string',
        ];
    }

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
            'email.unique' => 'L\'adresse e-mail est déjà utilisée.',

            'numero_telephone.required' => 'Le numéro de téléphone est requis.',
            'numero_telephone.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
            'numero_telephone.max' => 'Le numéro de téléphone ne peut pas dépasser 15 caractères.',

            'date_disponible.required' => 'La date de disponibilité est requise.',
            'date_disponible.date' => 'La date de disponibilité doit être une date valide.',

            'description_entreprise.required' => 'La description de l\'entreprise est requise.',
            'description_entreprise.string' => 'La description de l\'entreprise doit être une chaîne de caractères.',
        ];
    }
}
