<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartenaireSport extends Model
{
    protected $table = 'partenaire_sport';

    protected $fillable = [
        'nom',
        'numero',
        'address',
        'activites',
        'horaire',
        'equipements',
        'categorie',
        'quartier',
        'statut',
        'date_fin',
        'date_creation',
        'date_modification',
        'latitude',
        'longitude',
        'images',
        'contact_id',
        'description'
    ];

    public function contactPartenaire()
    {
        return $this->belongsTo(ContactPartenaire::class, 'contact_id');
    }
}
