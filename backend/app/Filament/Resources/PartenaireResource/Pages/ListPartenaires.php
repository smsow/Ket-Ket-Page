<?php

namespace App\Filament\Resources\PartenaireResource\Pages;

use App\Filament\Resources\PartenaireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartenaires extends ListRecords
{
    protected static string $resource = PartenaireResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
