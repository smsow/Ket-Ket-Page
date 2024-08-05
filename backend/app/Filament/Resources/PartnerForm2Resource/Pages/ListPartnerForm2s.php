<?php

namespace App\Filament\Resources\PartnerForm2Resource\Pages;

use App\Filament\Resources\PartnerForm2Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartnerForm2s extends ListRecords
{
    protected static string $resource = PartnerForm2Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
