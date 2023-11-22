<?php

namespace App\Filament\Resources\PrestasiResource\Pages;

use Filament\Actions;
use App\Models\Prestasi;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\PrestasiResource;

class EditPrestasi extends EditRecord
{
    protected static string $resource = PrestasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(
                    function (Prestasi $record) {
                        if ($record->foto) {
                            Storage::disk('public')->delete($record->foto);
                        }
                    }
                ),
        ];
    }
}
