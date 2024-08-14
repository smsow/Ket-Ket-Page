<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdresseRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }
    public function rules()
    {
        return [
            'numero' => 'sometimes|string|max:255',
            'rue' => 'sometimes|string|max:255',
            'quartier' => 'sometimes|string|max:255',
            'ville' => 'sometimes|string|max:255',
            'pays' => 'sometimes|string|max:255',
            'latitude' => 'sometimes|numeric',
            'longitude' => 'sometimes|numeric',
        ];
    }

    public function messages()
    {
        return [
            'numero.sometimes' => 'Le numéro est requis seulement lors de la mise à jour.',
            'rue.sometimes' => 'La rue est requise seulement lors de la mise à jour.',
            'quartier.sometimes' => 'Le quartier est requis seulement lors de la mise à jour.',
            'ville.sometimes' => 'La ville est requise seulement lors de la mise à jour.',
            'pays.sometimes' => 'Le pays est requis seulement lors de la mise à jour.',
            'latitude.sometimes' => 'La latitude est requise seulement lors de la mise à jour.',
            'longitude.sometimes' => 'La longitude est requise seulement lors de la mise à jour.',
        ];
    }
}
