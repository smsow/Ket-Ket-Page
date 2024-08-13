<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerForm2 extends Model
{
    use HasFactory;

    protected $table = 'partners_form2';
    
    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'numero_telephone',
        'date_disponible',
        'description_entreprise',
    ];
}
