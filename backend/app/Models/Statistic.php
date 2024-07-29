<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;

    protected $fillable = [
        'clients_satisfaits',
        'avis_rares',
        'annees_experience',
        'sports_offerts',
        'additional_column1',
        'additional_column2',
        'additional_column3',
        'additional_column4',
    ];

    // Définir les types pour les colonnes si nécessaire
    protected $casts = [
        'clients_satisfaits' => 'integer',
        'avis_rares' => 'integer',
        'annees_experience' => 'integer',
        'sports_offerts' => 'integer',
        'additional_column1' => 'string',
        'additional_column2' => 'string',
        'additional_column3' => 'string',
        'additional_column4' => 'string',
    ];
}
