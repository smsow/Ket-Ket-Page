<?php

namespace App\Filament\Resources\ContactPartenaireResource\Pages;

use App\Filament\Resources\ContactPartenaireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactPartenaires extends ListRecords
{
    protected static string $resource = ContactPartenaireResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
