<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartenaireSportRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nom' => 'required|string|max:255',
            'numero' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'activites' => 'required|string|max:255',
            'horaire' => 'required|string|max:255',
            'equipements' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'quartier' => 'required|string|max:255',
            'statut' => 'required|string|max:255',
            'date_fin' => 'nullable|date',
            'date_creation' => 'required|date',
            'date_modification' => 'nullable|date',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'images.array' => 'nullable|array',
            'images.*' => 'nullable|string|max:255',
            'contact_id' => 'required|exists:contact_partenaire,id',
            'description' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le nom du partenaire est obligatoire.',
            'numero.required' => 'Le numéro de téléphone est obligatoire.',
            'address.required' => "L'adresse est obligatoire.",
            'activites.required' => 'Les activités sont obligatoires.',
            'horaire.required' => "L'horaire est obligatoire.",
            'equipements.required' => 'Les équipements sont obligatoires.',
            'categorie.required' => 'La catégorie est obligatoire.',
            'quartier.required' => 'Le quartier est obligatoire.',
            'statut.required' => 'Le statut est obligatoire.',
            'date_creation.required' => 'La date de création est obligatoire.',
            'latitude.required' => 'La latitude est obligatoire.',
            'longitude.required' => 'La longitude est obligatoire.',
            'images.array' => 'Le champ images doit être un tableau.',
            'images.*.string' => 'Chaque image doit être une chaîne de caractères.',
            'contact_id.required' => "L'identifiant de contact est obligatoire.",
            'contact_id.exists' => "L'identifiant de contact doit exister dans la table contact_partenaire.",
        ];
    }
}
