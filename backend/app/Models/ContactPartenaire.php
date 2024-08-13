<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPartenaire extends Model
{
    protected $table = 'contact_partenaire';

    protected $fillable = [
        'nom',
        'numero',
        'mail',
        'position_hierarchique',
        'poste',
        'metier',
        'date_creation',
        'date_modification',
        'adresse',
        'quartier',
        'images'
    ];
}

