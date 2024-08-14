<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Autoriser toutes les requêtes
    }

    public function rules()
    {
        return [
            'nom' => 'sometimes|string|max:255',
            'abonnement' => 'sometimes|string|max:255',
            'historique_paiement' => 'sometimes|string',
            'status' => 'sometimes|string|max:255',
            'entreprise_id' => 'sometimes|exists:entreprise,id',
            'date_creation' => 'sometimes|date',
        ];
    }

    public function messages()
    {
        return [
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne peut pas dépasser 255 caractères.',
            'abonnement.string' => 'L\'abonnement doit être une chaîne de caractères.',
            'abonnement.max' => 'L\'abonnement ne peut pas dépasser 255 caractères.',
            'historique_paiement.string' => 'L\'historique de paiement doit être une chaîne de caractères.',
            'status.string' => 'Le statut doit être une chaîne de caractères.',
            'status.max' => 'Le statut ne peut pas dépasser 255 caractères.',
            'entreprise_id.exists' => 'L\'ID de l\'entreprise doit exister dans la table des entreprises.',
            'date_creation.date' => 'La date de création doit être une date valide.',
        ];
    }
}
