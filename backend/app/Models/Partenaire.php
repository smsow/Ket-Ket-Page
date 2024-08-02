<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'cart_titre',
        'cart_description1',
        'cart_description2',
        'cart_description3', // Champ ajouté
        'cart_description4', // Champ ajouté
        'cart_description5', // Champ ajouté
    ];
}
