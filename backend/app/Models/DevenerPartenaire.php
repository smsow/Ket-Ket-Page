<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DevenerPartenaire extends Model
{
    use HasFactory;
     protected $fillable = [
        'title',
        'subtitle',
        'cart_1',
        'cart_2',
        'cart_3',
    ];
}
