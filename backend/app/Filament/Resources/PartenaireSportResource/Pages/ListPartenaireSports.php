<?php

namespace App\Filament\Resources\PartenaireSportResource\Pages;

use App\Filament\Resources\PartenaireSportResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartenaireSports extends ListRecords
{
    protected static string $resource = PartenaireSportResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
