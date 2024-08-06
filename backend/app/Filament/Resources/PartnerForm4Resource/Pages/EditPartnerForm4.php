<?php

namespace App\Filament\Resources\PartnerForm4Resource\Pages;

use App\Filament\Resources\PartnerForm4Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartnerForm4 extends EditRecord
{
    protected static string $resource = PartnerForm4Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
