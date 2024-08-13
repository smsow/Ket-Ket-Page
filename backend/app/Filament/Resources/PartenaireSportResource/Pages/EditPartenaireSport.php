<?php

namespace App\Filament\Resources\PartenaireSportResource\Pages;

use App\Filament\Resources\PartenaireSportResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartenaireSport extends EditRecord
{
    protected static string $resource = PartenaireSportResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
