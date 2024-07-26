<?php

namespace App\Filament\Resources\AdvantageResource\Pages;

use App\Filament\Resources\AdvantageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdvantages extends ListRecords
{
    protected static string $resource = AdvantageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
