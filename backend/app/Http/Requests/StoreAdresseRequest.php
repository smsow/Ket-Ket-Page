<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdresseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'numero' => 'required|string|max:255',
            'rue' => 'required|string|max:255',
            'quartier' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'numero.required' => 'Le numéro est requis.',
            'rue.required' => 'La rue est requise.',
            'quartier.required' => 'Le quartier est requis.',
            'ville.required' => 'La ville est requise.',
            'pays.required' => 'Le pays est requis.',
            'latitude.required' => 'La latitude est requise.',
            'longitude.required' => 'La longitude est requise.',
        ];
    }
}
