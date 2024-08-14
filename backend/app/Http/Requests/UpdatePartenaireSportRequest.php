<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePartenaireSportRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nom' => 'sometimes|string|max:255',
            'numero' => 'sometimes|string|max:255',
            'address' => 'sometimes|string|max:255',
            'activites' => 'sometimes|string|max:255',
            'horaire' => 'sometimes|string|max:255',
            'equipements' => 'sometimes|string|max:255',
            'categorie' => 'sometimes|string|max:255',
            'quartier' => 'sometimes|string|max:255',
            'statut' => 'sometimes|string|max:255',
            'date_fin' => 'nullable|date',
            'date_creation' => 'sometimes|date',
            'date_modification' => 'nullable|date',
            'latitude' => 'sometimes|numeric',
            'longitude' => 'sometimes|numeric',
            'images.array' => 'Le champ images doit être un tableau.',
            'images.*.string' => 'Chaque image doit être une chaîne de caractères.',
            'contact_id' => 'sometimes|exists:contact_partenaire,id',
            'description' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'nom.sometimes' => 'Le nom du partenaire peut être modifié.',
            'numero.sometimes' => 'Le numéro de téléphone peut être modifié.',
            'address.sometimes' => "L'adresse peut être modifiée.",
            'activites.sometimes' => 'Les activités peuvent être modifiées.',
            'horaire.sometimes' => "L'horaire peut être modifié.",
            'equipements.sometimes' => 'Les équipements peuvent être modifiés.',
            'categorie.sometimes' => 'La catégorie peut être modifiée.',
            'quartier.sometimes' => 'Le quartier peut être modifié.',
            'statut.sometimes' => 'Le statut peut être modifié.',
            'date_creation.sometimes' => 'La date de création peut être modifiée.',
            'latitude.sometimes' => 'La latitude peut être modifiée.',
            'longitude.sometimes' => 'La longitude peut être modifiée.',
            'images.array' => 'Les images doivent être un tableau.',
            'images.*.file' => 'Chaque élément dans les images doit être un fichier valide.',
            'images.*.mimes' => 'Chaque image doit être au format JPG, JPEG, PNG, ou BMP.',
            'images.*.max' => 'Chaque image ne doit pas dépasser 5 Mo.',
            'contact_id.sometimes' => "L'identifiant de contact peut être modifié.",
            'contact_id.exists' => "L'identifiant de contact doit exister dans la table contact_partenaire.",
        ];
    }
}
