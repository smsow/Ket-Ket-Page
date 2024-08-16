<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'client_id',
        'service_id',
        'duree',
        'date_fin',
        'date_creation',
        'type',
        'status',
        'date_debut',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function getDateFinFormattedAttribute()
    {
        return $this->date_fin ? \Carbon\Carbon::parse($this->date_fin)->format('d/m/Y') : 'N/A';
    }

    public function getDateCreationFormattedAttribute()
    {
        return $this->date_creation ? \Carbon\Carbon::parse($this->date_creation)->format('d/m/Y') : 'N/A';
    }

    public function getDateDebutFormattedAttribute()
    {
        return $this->date_debut ? \Carbon\Carbon::parse($this->date_debut)->format('d/m/Y') : 'N/A';
    }
}
