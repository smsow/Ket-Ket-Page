<?php

namespace App\Filament\Resources\AbonnementResource\Pages;

use App\Filament\Resources\AbonnementResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAbonnement extends EditRecord
{
    protected static string $resource = AbonnementResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
