<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Les attributs qui peuvent être assignés en masse
    protected $fillable = [
        'title',
        'image',
        'subtitle',
        'description',
        'activite_id',
        'partenaire_sport_id',
        'horaire',
        'prix',
        'type',
        'jours',
    ];

    /**
     * Obtenir l'activité associée au service.
     *
     * Cette méthode définit une relation où chaque service appartient à une seule activité.
     * Elle utilise la clé étrangère par défaut 'activity_id' pour établir cette association.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function activity()
    {
        return $this->belongsTo(Activity::class, 'activite_id');
    }

    /**
     * Obtenir le partenaire sportif associé au service.
     *
     * Cette méthode définit une relation où chaque service appartient à un partenaire sportif.
     * Elle utilise la clé étrangère 'partenaire_sport_id' pour établir cette association.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partenaireSport()
    {
        return $this->belongsTo(PartenaireSport::class, 'partenaire_sport_id');
    }
}
