<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Définir les attributs que vous pouvez remplir en masse
    protected $fillable = [
        'nom',
        'abonnement',
        'historique_paiement',
        'status',
        'entreprise_id',
        'date_creation',
    ];
    // Définir les relations
    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }
    public function abonnements()
    {
        return $this->hasMany(Abonnement::class);
    }


}
