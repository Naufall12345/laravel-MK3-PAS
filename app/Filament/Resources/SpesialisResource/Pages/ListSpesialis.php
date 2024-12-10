<?php

namespace App\Filament\Resources\SpesialisResource\Pages;

use App\Filament\Resources\SpesialisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSpesialis extends ListRecords
{
    protected static string $resource = SpesialisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
