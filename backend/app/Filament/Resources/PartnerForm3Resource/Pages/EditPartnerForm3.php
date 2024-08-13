<?php

namespace App\Filament\Resources\PartnerForm3Resource\Pages;

use App\Filament\Resources\PartnerForm3Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartnerForm3 extends EditRecord
{
    protected static string $resource = PartnerForm3Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
