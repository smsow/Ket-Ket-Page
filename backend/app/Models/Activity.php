<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'image',
        'description',
    ];

    public function services()
    {
        return $this->hasMany(Service::class, 'activite_id');
    }
}
