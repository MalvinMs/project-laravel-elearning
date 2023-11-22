<?php

namespace App\Filament\Resources\FasilitasResource\Pages;

use Filament\Actions;
use App\Models\Fasilitas;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\FasilitasResource;

class EditFasilitas extends EditRecord
{
    protected static string $resource = FasilitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(
                    function (Fasilitas $record) {
                        if ($record->foto) {
                            Storage::disk('public')->delete($record->foto);
                        }
                    }
                ),
        ];
    }
}
