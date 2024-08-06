<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartnerForm4Request extends FormRequest
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
            'email' => 'required|email|unique:partners_form4,email',
            'numero_telephone' => 'required|string|max:20',
            'date_disponible' => 'required|date',
            'nom_entreprise' => 'required|string|max:255',
            'vous_etes' => 'required|string|max:255',
            'description_entreprise' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'prenom.required' => 'Le prénom est obligatoire.',
            'nom.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être une adresse valide.',
            'email.unique' => 'Cet email est déjà utilisé.',
            'numero_telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'date_disponible.required' => 'La date disponible est obligatoire.',
            'nom_entreprise.required' => 'Le nom de l\'entreprise est obligatoire.',
            'vous_etes.required' => 'Le champ "vous êtes" est obligatoire.',
            'description_entreprise.required' => 'La description de l\'entreprise est obligatoire.',
        ];
    }
}
