<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePartnerForm4Request extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'prenom' => 'sometimes|required|string|max:255',
            'nom' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:partners_form4,email,' . $this->route('id'),
            'numero_telephone' => 'sometimes|required|string|max:20',
            'date_disponible' => 'sometimes|required|date',
            'nom_entreprise' => 'sometimes|required|string|max:255',
            'vous_etes' => 'sometimes|required|string|max:255',
            'description_entreprise' => 'sometimes|required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'prenom.sometimes' => 'Le prénom est parfois requis.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'nom.sometimes' => 'Le nom est parfois requis.',
            'nom.required' => 'Le nom est obligatoire.',
            'email.sometimes' => 'L\'email est parfois requis.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être une adresse valide.',
            'email.unique' => 'Cet email est déjà utilisé.',
            'numero_telephone.sometimes' => 'Le numéro de téléphone est parfois requis.',
            'numero_telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'date_disponible.sometimes' => 'La date disponible est parfois requise.',
            'date_disponible.required' => 'La date disponible est obligatoire.',
            'nom_entreprise.sometimes' => 'Le nom de l\'entreprise est parfois requis.',
            'nom_entreprise.required' => 'Le nom de l\'entreprise est obligatoire.',
            'vous_etes.sometimes' => 'Le type de partenaire est parfois requis.',
            'vous_etes.required' => 'Le type de partenaire est obligatoire.',
            'description_entreprise.sometimes' => 'La description de l\'entreprise est parfois requise.',
            'description_entreprise.required' => 'La description de l\'entreprise est obligatoire.',
        ];
    }
}
