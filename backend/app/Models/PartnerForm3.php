<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerForm3 extends Model
{
    use HasFactory;

    protected $table = 'partner_form3';

    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'numero_telephone',
        'date_disponible',
        'nom_entreprise',
        'description_entreprise',
    ];
}
