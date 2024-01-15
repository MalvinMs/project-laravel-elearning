<?php

namespace App\Filament\Resources\NilaiResource\Pages;

use Filament\Actions;
use App\Filament\Resources\NilaiResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;

class ListNilais extends ListRecords
{
    protected static string $resource = NilaiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public function getTabs(): array
    {
        return [
            'All' => Tab::make(),
            'Ujian' => Tab::make()->modifyQueryUsing(function ($query) {
                $query->whereHas('kategori', function ($query) {
                    $query->where('nama', 'Ujian');
                });
            }),
            'Tugas' => Tab::make()->modifyQueryUsing(function ($query) {
                $query->whereHas('kategori', function ($query) {
                    $query->where('nama', 'Tugas');
                });
            }),
        ];
    }
}
