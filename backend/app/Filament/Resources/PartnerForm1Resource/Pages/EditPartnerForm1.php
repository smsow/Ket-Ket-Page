<?php

namespace App\Filament\Resources\PartnerForm1Resource\Pages;

use App\Filament\Resources\PartnerForm1Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartnerForm1 extends EditRecord
{
    protected static string $resource = PartnerForm1Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
