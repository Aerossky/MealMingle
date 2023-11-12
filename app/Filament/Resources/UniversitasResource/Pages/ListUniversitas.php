<?php

namespace App\Filament\Resources\UniversitasResource\Pages;

use App\Filament\Resources\UniversitasResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUniversitas extends ListRecords
{
    protected static string $resource = UniversitasResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
