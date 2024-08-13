<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePrendreRendezVousRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Modifier si nécessaire
    }

    public function rules()
    {
        return [
            'prenom' => 'sometimes|string|max:255',
            'nom' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|max:255',
            'telephone' => 'sometimes|string|max:20',
            'date' => 'sometimes|date',
            'motif' => 'sometimes|string',
            'message' => 'sometimes|string', // Ajout du champ "message"
        ];
    }

    public function messages()
    {
        return [
            'prenom.sometimes' => 'Le prénom est facultatif, mais doit être valide si présent.',
            'nom.sometimes' => 'Le nom est facultatif, mais doit être valide si présent.',
            'email.sometimes' => "L'email est facultatif, mais doit être valide si présent.",
            'telephone.sometimes' => 'Le numéro de téléphone est facultatif, mais doit être valide si présent.',
            'date.sometimes' => 'La date est facultative, mais doit être valide si présente.',
            'motif.sometimes' => 'Le motif est facultatif, mais doit être valide si présent.',
            'message.sometimes' => 'Le message est facultatif, mais doit être valide si présent.', // Message pour le champ "message"
        ];
    }
}
