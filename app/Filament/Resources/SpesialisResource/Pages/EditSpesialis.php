<?php

namespace App\Filament\Resources\SpesialisResource\Pages;

use App\Filament\Resources\SpesialisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpesialis extends EditRecord
{
    protected static string $resource = SpesialisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
