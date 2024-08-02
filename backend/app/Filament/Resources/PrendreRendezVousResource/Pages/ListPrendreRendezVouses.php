<?php

namespace App\Filament\Resources\PrendreRendezVousResource\Pages;

use App\Filament\Resources\PrendreRendezVousResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrendreRendezVouses extends ListRecords
{
    protected static string $resource = PrendreRendezVousResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
