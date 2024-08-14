<?php

namespace App\Filament\Resources\AdresseResource\Pages;

use App\Filament\Resources\AdresseResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdresse extends EditRecord
{
    protected static string $resource = AdresseResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
