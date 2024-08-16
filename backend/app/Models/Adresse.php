<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'rue',
        'quartier',
        'ville',
        'pays',
        'latitude',
        'longitude',
    ];

    public function entreprises()
    {
        return $this->hasMany(Entreprise::class, 'adresse_id');
    }
}
