<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerForm4 extends Model
{
    use HasFactory;
    protected $table = 'partners_form4';


    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'numero_telephone',
        'date_disponible',
        'nom_entreprise',
        'vous_etes',
        'description_entreprise',
    ];
}

