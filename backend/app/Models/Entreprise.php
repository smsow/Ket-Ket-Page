<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $table = 'entreprise';

    protected $fillable = [
        'nom',
        'numero',
        'siege',
        'secteur_activite',
        'nombre_employes',
        'quartier',
        'date_creation',
        'date_modification',
        'latitude',
        'longitude',
        //'images',
        'contact_id',
        'adresse_id'  // Ajoutez cette ligne
    ];

    public function contactPartenaire()
    {
        return $this->belongsTo(ContactPartenaire::class, 'contact_id');
    }

    public function adresse()
    {
        return $this->belongsTo(Adresse::class, 'adresse_id');
    }
}
