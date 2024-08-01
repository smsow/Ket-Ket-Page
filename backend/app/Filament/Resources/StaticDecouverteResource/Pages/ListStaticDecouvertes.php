<?php

namespace App\Filament\Resources\StaticDecouverteResource\Pages;

use App\Filament\Resources\StaticDecouverteResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStaticDecouvertes extends ListRecords
{
    protected static string $resource = StaticDecouverteResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
