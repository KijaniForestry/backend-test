<?php

namespace App\Filament\Resources\Farmers\Pages;

use App\Filament\Resources\Farmers\FarmersResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFarmers extends ViewRecord
{
    protected static string $resource = FarmersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
