<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAbonnementRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust based on your authorization logic
    }

    public function rules()
    {
        return [
            'nom' => 'required|string|max:255',
            'client_id' => 'required|exists:clients,id',
            'service_id' => 'required|exists:services,id',
            'duree' => 'required|numeric',
            'date_fin' => 'required|date',
            'date_creation' => 'required|date',
            'type' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'date_debut' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le champ nom est obligatoire.',
            'nom.string' => 'Le champ nom doit être une chaîne de caractères.',
            'nom.max' => 'Le champ nom ne peut pas dépasser 255 caractères.',
            'client_id.required' => 'Le champ client est obligatoire.',
            'client_id.exists' => 'Le client sélectionné n\'existe pas.',
            'service_id.required' => 'Le champ service est obligatoire.',
            'service_id.exists' => 'Le service sélectionné n\'existe pas.',
            'duree.required' => 'Le champ durée est obligatoire.',
            'duree.numeric' => 'Le champ durée doit être un nombre.',
            'date_fin.required' => 'Le champ date de fin est obligatoire.',
            'date_fin.date' => 'Le champ date de fin doit être une date valide.',
            'date_creation.required' => 'Le champ date de création est obligatoire.',
            'date_creation.date' => 'Le champ date de création doit être une date valide.',
            'type.required' => 'Le champ type est obligatoire.',
            'type.string' => 'Le champ type doit être une chaîne de caractères.',
            'type.max' => 'Le champ type ne peut pas dépasser 255 caractères.',
            'status.required' => 'Le champ statut est obligatoire.',
            'status.string' => 'Le champ statut doit être une chaîne de caractères.',
            'status.max' => 'Le champ statut ne peut pas dépasser 255 caractères.',
            'date_debut.required' => 'Le champ date de début est obligatoire.',
            'date_debut.date' => 'Le champ date de début doit être une date valide.',
        ];
    }
}
