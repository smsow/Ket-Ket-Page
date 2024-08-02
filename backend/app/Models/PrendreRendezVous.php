<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrendreRendezVous extends Model
{
    use HasFactory;

    protected $table = 'prendre_rendez_vous';

    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'telephone',
        'date',
        'motif',
    ];
}
