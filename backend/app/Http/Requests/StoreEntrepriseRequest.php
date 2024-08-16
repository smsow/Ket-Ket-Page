<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntrepriseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required|string|max:255',
            'numero' => 'required|numeric',
            'siege' => 'required|string|max:255',
            'secteur_activite' => 'required|string|max:255',
            'nombre_employes' => 'nullable|integer',
            'quartier' => 'nullable|string|max:255',
            'date_creation' => 'nullable|date',
            'date_modification' => 'nullable|date',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'images' => 'nullable|string',
            'adresse_id' => 'required|exists:adresses,id', // Correction ici pour rendre 'adresse_id' obligatoire
            'contact_id' => 'nullable|exists:contact_partenaire,id',
        ];
    }

    /**
     * Get the custom error messages for the validator.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nom.required' => 'Le nom de l\'entreprise est requis.',
            'nom.string' => 'Le nom doit être une chaîne de caractères.',
            'nom.max' => 'Le nom ne peut pas dépasser 255 caractères.',
            'numero.required' => 'Le numéro de l\'entreprise est requis.',
            'numero.numeric' => 'Le numéro doit être un nombre.',
            'siege.required' => 'Le siège est requis.',
            'siege.string' => 'Le siège doit être une chaîne de caractères.',
            'siege.max' => 'Le siège ne peut pas dépasser 255 caractères.',
            'secteur_activite.required' => 'Le secteur d\'activité est requis.',
            'secteur_activite.string' => 'Le secteur d\'activité doit être une chaîne de caractères.',
            'secteur_activite.max' => 'Le secteur d\'activité ne peut pas dépasser 255 caractères.',
            'nombre_employes.integer' => 'Le nombre d\'employés doit être un nombre entier.',
            'quartier.string' => 'Le quartier doit être une chaîne de caractères.',
            'quartier.max' => 'Le quartier ne peut pas dépasser 255 caractères.',
            'date_creation.date' => 'La date de création doit être une date valide.',
            'date_modification.date' => 'La date de modification doit être une date valide.',
            'latitude.numeric' => 'La latitude doit être un nombre.',
            'longitude.numeric' => 'La longitude doit être un nombre.',
            'images.string' => 'Les images doivent être une chaîne de caractères.',
            'adresse_id.required' => 'L\'adresse est requise.',
            'adresse_id.exists' => 'L\'adresse sélectionnée doit exister dans la base de données.',
            'contact_id.exists' => 'Le contact partenaire sélectionné doit exister dans la base de données.',
        ];
    }
}
