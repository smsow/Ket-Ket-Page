<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStatisticRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'clients_satisfaits' => 'sometimes|required|integer',
            'avis_rares' => 'sometimes|required|integer',
            'annees_experience' => 'sometimes|required|integer',
            'sports_offerts' => 'sometimes|required|integer',
            'additional_column1' => 'sometimes|required|string',
            'additional_column2' => 'sometimes|required|string',
            'additional_column3' => 'sometimes|required|string',
            'additional_column4' => 'sometimes|required|string',
        ];
    }

    public function messages()
    {
        return [
            'clients_satisfaits.sometimes' => 'Le nombre de clients satisfaits est parfois requis.',
            'avis_rares.sometimes' => 'Le nombre d\'avis rares est parfois requis.',
            'annees_experience.sometimes' => 'Le nombre d\'années d\'expérience est parfois requis.',
            'sports_offerts.sometimes' => 'Le nombre de sports offerts est parfois requis.',
            'additional_column1.sometimes' => 'La première colonne additionnelle est parfois requise.',
            'additional_column2.sometimes' => 'La deuxième colonne additionnelle est parfois requise.',
            'additional_column3.sometimes' => 'La troisième colonne additionnelle est parfois requise.',
            'additional_column4.sometimes' => 'La quatrième colonne additionnelle est parfois requise.',
        ];
    }
}
