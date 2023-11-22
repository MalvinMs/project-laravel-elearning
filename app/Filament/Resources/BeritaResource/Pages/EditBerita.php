<?php

namespace App\Filament\Resources\BeritaResource\Pages;

use Filament\Actions;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\BeritaResource;

class EditBerita extends EditRecord
{
    protected static string $resource = BeritaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(
                    function (Berita $record) {
                        if ($record->foto) {
                            Storage::disk('public')->delete($record->foto);
                        }
                    }
                ),
        ];
    }
}
