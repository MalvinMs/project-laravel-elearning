<?php

namespace App\Filament\Resources\FotoWebResource\Pages;

use App\Filament\Resources\FotoWebResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFotoWeb extends EditRecord
{
    protected static string $resource = FotoWebResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
