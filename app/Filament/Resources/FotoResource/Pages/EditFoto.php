<?php

namespace App\Filament\Resources\FotoResource\Pages;

use App\Models\Foto;
use Filament\Actions;
use Illuminate\Support\Facades\Storage;
use App\Filament\Resources\FotoResource;
use Filament\Resources\Pages\EditRecord;

class EditFoto extends EditRecord
{
    protected static string $resource = FotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(
                    function (Foto $record) {
                        if ($record->foto) {
                            Storage::disk('public')->delete($record->foto);
                        }
                    }
                ),
        ];
    }
}
