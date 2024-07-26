<?php

namespace App\Filament\Resources\AccolandResource\Pages;

use App\Filament\Resources\AccolandResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAccoland extends EditRecord
{
    protected static string $resource = AccolandResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
