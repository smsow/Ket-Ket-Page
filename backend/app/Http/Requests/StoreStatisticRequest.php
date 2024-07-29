<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStatisticRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'clients_satisfaits' => 'required|integer',
            'avis_rares' => 'required|integer',
            'annees_experience' => 'required|integer',
            'sports_offerts' => 'required|integer',
            'additional_column1' => 'required|string',
            'additional_column2' => 'required|string',
            'additional_column3' => 'required|string',
            'additional_column4' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'clients_satisfaits.required' => 'Le nombre de clients satisfaits est requis.',
            'avis_rares.required' => 'Le nombre d\'avis rares est requis.',
            'annees_experience.required' => 'Le nombre d\'années d\'expérience est requis.',
            'sports_offerts.required' => 'Le nombre de sports offerts est requis.',
            'additional_column1.required' => 'La première colonne additionnelle est requise.',
            'additional_column2.required' => 'La deuxième colonne additionnelle est requise.',
            'additional_column3.required' => 'La troisième colonne additionnelle est requise.',
            'additional_column4.required' => 'La quatrième colonne additionnelle est requise.',
        ];
    }
}
