<?php

namespace App\Filament\Resources\AdresseResource\Pages;

use App\Filament\Resources\AdresseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdresses extends ListRecords
{
    protected static string $resource = AdresseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
