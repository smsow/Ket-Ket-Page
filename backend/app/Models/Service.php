<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'subtitle',
        'description',
        // 'activite_id',
        // 'partenaire_sport_id',
        // 'horaire',
        // 'prix',
        // 'type',
        // 'jours',
    ];

    // public function activite()
    // {
    //     return $this->belongsTo(Activity::class);
    // }

    // public function partenaireSport()
    // {
    //     return $this->belongsTo(PartenaireSport::class);
    // }

    public function abonnements()
    {
        return $this->hasMany(Abonnement::class);
    }

}
