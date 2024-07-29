<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'sous_titre',
        'description',
        'sous_titre1',
        'description1',
        'sous_titre2',
        'description2',
        'sous_titre3',
        'description3',
        'sous_titre4',
        'description4',
        'sous_titre5',
        'description5',
        'sous_titre6',
        'description6',
    ];
}
