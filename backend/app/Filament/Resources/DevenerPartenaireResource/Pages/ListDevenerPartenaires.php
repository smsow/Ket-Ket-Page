<?php

namespace App\Filament\Resources\DevenerPartenaireResource\Pages;

use App\Filament\Resources\DevenerPartenaireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDevenerPartenaires extends ListRecords
{
    protected static string $resource = DevenerPartenaireResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
