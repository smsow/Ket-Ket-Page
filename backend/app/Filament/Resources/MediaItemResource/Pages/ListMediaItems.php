<?php

namespace App\Filament\Resources\MediaItemResource\Pages;

use App\Filament\Resources\MediaItemResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMediaItems extends ListRecords
{
    protected static string $resource = MediaItemResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
