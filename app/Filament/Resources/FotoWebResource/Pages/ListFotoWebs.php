<?php

namespace App\Filament\Resources\FotoWebResource\Pages;

use App\Filament\Resources\FotoWebResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFotoWebs extends ListRecords
{
    protected static string $resource = FotoWebResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
