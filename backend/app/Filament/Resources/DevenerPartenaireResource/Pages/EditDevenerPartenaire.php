<?php

namespace App\Filament\Resources\DevenerPartenaireResource\Pages;

use App\Filament\Resources\DevenerPartenaireResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDevenerPartenaire extends EditRecord
{
    protected static string $resource = DevenerPartenaireResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
