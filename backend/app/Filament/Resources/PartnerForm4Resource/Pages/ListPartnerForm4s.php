<?php

namespace App\Filament\Resources\PartnerForm4Resource\Pages;

use App\Filament\Resources\PartnerForm4Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartnerForm4s extends ListRecords
{
    protected static string $resource = PartnerForm4Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
