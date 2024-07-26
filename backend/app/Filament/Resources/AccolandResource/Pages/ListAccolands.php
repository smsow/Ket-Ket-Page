<?php

namespace App\Filament\Resources\AccolandResource\Pages;

use App\Filament\Resources\AccolandResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAccolands extends ListRecords
{
    protected static string $resource = AccolandResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
