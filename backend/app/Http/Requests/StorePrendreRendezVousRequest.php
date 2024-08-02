<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrendreRendezVousRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Modifier si nécessaire
    }

    public function rules()
    {
        return [
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'date' => 'required|date',
            'motif' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'prenom.required' => 'Le prénom est obligatoire.',
            'nom.required' => 'Le nom est obligatoire.',
            'email.required' => "L'email est obligatoire.",
            'telephone.required' => 'Le numéro de téléphone est obligatoire.',
            'date.required' => 'La date est obligatoire.',
            'motif.required' => 'Le motif est obligatoire.',
        ];
    }
}
