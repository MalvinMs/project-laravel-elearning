<?php

namespace App\Filament\Resources\NilaiResource\Pages;

use App\Models\Siswa;
use Filament\Actions;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\NilaiResource;
use App\Models\Nilai;
use Filament\Forms\Set;
use Filament\Resources\Pages\CreateRecord;

class CreateNilai extends CreateRecord
{
    protected static string $resource = NilaiResource::class;
    protected static string $view = 'filament.resource.nilai-resource.pages.form-nilai';

    public function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Nilai')
                ->schema([
                    Select::make('kelas_id')
                        ->relationship('kelas', 'nama')
                        ->preload()
                        ->live()
                        ->afterStateUpdated(function (Set $set) {
                            $set('siswa_id', null);
                            $set('periode_id', null);
                        })
                        ->required(),
                    Select::make('periode_id')
                        ->relationship('periode', 'nama')
                        ->live()
                        ->afterStateUpdated(function (Set $set) {
                            $set('student_id', null);
                        })
                        ->required(),
                    Select::make('mata_pelajaran_id')
                        ->relationship('mata_pelajaran', 'nama')
                        ->required(),
                    Select::make('kategori_id')
                        ->relationship('kategori', 'nama')
                        ->columnSpan(3)
                        ->required(),
                ])
                ->columns(3),

            Repeater::make('studentgrades')
                ->label('Nilai')
                ->schema(fn (Get $get): array => [
                    Select::make('siswa_id')
                        ->options(function () use ($get) {
                            return Siswa::where('kelas_id', $get('kelas_id'))->pluck('nama', 'id');
                        })
                        ->preload()
                        ->live()
                        ->label('Siswa'),
                    TextInput::make('nilai'),
                ])->columns(2)->columnSpanFull(),
        ]);
    }

    public function save()
    {
        $get = $this->form->getState();

        $insert = [];
        foreach ($get['studentgrades'] as $row) {
            array_push($insert, [
                'kelas_id' => $get['kelas_id'],
                'siswa_id' => $row['siswa_id'], // Akses nilai "student" dari dalam array $row
                'periode_id' => $get['periode_id'],
                'guru_id' => Auth::user()->id,
                'mata_pelajaran_id' => $get['mata_pelajaran_id'],
                'kategori_id' => $get['kategori_id'],
                'nilai' => $row['nilai']
            ]);
        }

        Nilai::insert($insert);

        return redirect()->to('admin/nilais');
    }
}
