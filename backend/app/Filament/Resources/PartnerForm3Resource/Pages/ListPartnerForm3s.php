<?php

namespace App\Filament\Resources\PartnerForm3Resource\Pages;

use App\Filament\Resources\PartnerForm3Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartnerForm3s extends ListRecords
{
    protected static string $resource = PartnerForm3Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
