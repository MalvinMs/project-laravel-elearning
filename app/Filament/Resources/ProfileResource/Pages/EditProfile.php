<?php

namespace App\Filament\Resources\ProfileResource\Pages;

use Filament\Actions;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ProfileResource;

class EditProfile extends EditRecord
{
    protected static string $resource = ProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(
                    function (Profile $record) {
                        if ($record->foto) {
                            Storage::disk('public')->delete($record->foto);
                        }
                    }
                ),
        ];
    }
}
