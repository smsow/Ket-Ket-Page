<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'montant',
        'date_fin',
        'date_creation',
        'abonnement_id',
    ];

    // Define the relationship with Abonnement model
    public function abonnement()
    {
        return $this->belongsTo(Abonnement::class);
    }
}
