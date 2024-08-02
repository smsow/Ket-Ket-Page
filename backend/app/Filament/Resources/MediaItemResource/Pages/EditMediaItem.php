<?php

namespace App\Filament\Resources\MediaItemResource\Pages;

use App\Filament\Resources\MediaItemResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMediaItem extends EditRecord
{
    protected static string $resource = MediaItemResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
