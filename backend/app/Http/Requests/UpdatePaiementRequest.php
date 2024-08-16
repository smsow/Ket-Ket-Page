<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaiementRequest extends FormRequest
{
    public function rules()
    {
        return [
            'montant' => 'sometimes|required|numeric|min:0',
            'date_fin' => 'sometimes|required|date',
            'date_creation' => 'sometimes|required|date',
            'abonnement_id' => 'sometimes|required|exists:abonnements,id',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
