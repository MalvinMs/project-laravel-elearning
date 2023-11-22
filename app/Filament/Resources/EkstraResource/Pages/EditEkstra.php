<?php

namespace App\Filament\Resources\EkstraResource\Pages;


use App\Filament\Resources\EkstraResource;
use App\Models\Ekstra;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditEkstra extends EditRecord
{
    protected static string $resource = EkstraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(
                    function (Ekstra $record) {
                        if ($record->foto) {
                            Storage::disk('public')->delete($record->foto);
                        }
                    }
                ),
        ];
    }
}
