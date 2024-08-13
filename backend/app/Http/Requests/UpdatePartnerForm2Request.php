<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePartnerForm2Request extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $partnerId = $this->route('partner'); // Obtient l'ID du partenaire depuis la route

        return [
            'prenom' => 'sometimes|required|string|max:255',
            'nom' => 'sometimes|required|string|max:255',
            'email' => [
                'sometimes',
                'required',
                'email',
                Rule::unique('partners_form2')->ignore($partnerId),
            ],
            'numero_telephone' => 'sometimes|required|string|max:15',
            'date_disponible' => 'sometimes|required|date',
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

            'email.sometimes' => 'L\'adresse e-mail est parfois requise.',
            'email.required' => 'L\'adresse e-mail est obligatoire.',
            'email.email' => 'L\'adresse e-mail doit être valide.',
            'email.unique' => 'L\'adresse e-mail est déjà utilisée.',

            'numero_telephone.sometimes' => 'Le numéro de téléphone est parfois requis.',
            'numero_telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'numero_telephone.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
            'numero_telephone.max' => 'Le numéro de téléphone ne peut pas dépasser 15 caractères.',

            'date_disponible.sometimes' => 'La date de disponibilité est parfois requise.',
            'date_disponible.required' => 'La date de disponibilité est obligatoire.',
            'date_disponible.date' => 'La date de disponibilité doit être une date valide.',

            'description_entreprise.sometimes' => 'La description de l\'entreprise est parfois requise.',
            'description_entreprise.required' => 'La description de l\'entreprise est obligatoire.',
            'description_entreprise.string' => 'La description de l\'entreprise doit être une chaîne de caractères.',
        ];
    }
}
