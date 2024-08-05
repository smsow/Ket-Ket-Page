<?php

namespace App\Filament\Resources\PartnerForm1Resource\Pages;

use App\Filament\Resources\PartnerForm1Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartnerForm1s extends ListRecords
{
    protected static string $resource = PartnerForm1Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
