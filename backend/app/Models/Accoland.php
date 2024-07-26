<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accoland extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'image',
    ];
}
