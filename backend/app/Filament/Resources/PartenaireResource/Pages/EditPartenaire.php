<?php

namespace App\Filament\Resources\PartenaireResource\Pages;

use App\Filament\Resources\PartenaireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartenaire extends EditRecord
{
    protected static string $resource = PartenaireResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
