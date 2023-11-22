<?php

namespace App\Filament\Resources\FotoResource\Pages;

use App\Filament\Resources\FotoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFotos extends ListRecords
{
    protected static string $resource = FotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
