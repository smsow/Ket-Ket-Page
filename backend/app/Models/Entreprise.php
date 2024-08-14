<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
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
       // 'images',
        'contact_id'
    ];
    // protected $casts = [
    //     'images' => 'array',
    // ];

    public function contactPartenaire()
    {
        return $this->belongsTo(ContactPartenaire::class, 'contact_id');
    }
}
