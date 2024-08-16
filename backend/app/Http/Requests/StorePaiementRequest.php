<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaiementRequest extends FormRequest
{
    public function rules()
    {
        return [
            'montant' => 'required|numeric|min:0',
            'date_fin' => 'required|date',
            'date_creation' => 'required|date',
            'abonnement_id' => 'required|exists:abonnements,id',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
