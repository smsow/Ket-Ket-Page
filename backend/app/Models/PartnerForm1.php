<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerForm1 extends Model
{
    use HasFactory;

    protected $table = 'partners_form1';

    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'numero_telephone',
        'date_disponible',
        'nom_entreprise',
        'position_entreprise',
        'description_entreprise',
    ];
}
