<?php

namespace App\Filament\Resources\AbsensiResource\Pages;

use App\Models\Siswa;
use Filament\Actions;
use App\Models\Absensi;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\AbsensiResource;
use Filament\Forms\Set;

class CreateAbsensi extends CreateRecord
{
    protected static string $resource = AbsensiResource::class;
    protected static string $view = 'filament.resource.nilai-resource.pages.form-nilai';

    public function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Nilai')
                ->schema([
                    Select::make('kelas_id')
                        ->relationship('kelas', 'id')
                        ->live()
                        ->preload()
                        ->afterStateUpdated(fn (Set $set) => $set('siswa_id', null))
                        ->required(),
                    DatePicker::make('tanggal')
                        ->required(),

                ])
                ->columns(2),

            Repeater::make('studentgrades')
                ->label('Siswa')
                ->schema(fn (Get $get): array => [
                    Select::make('siswa_id')
                        ->options(function () use ($get) {
                            return Siswa::where('kelas_id', $get('kelas_id'))->pluck('nama', 'id');
                        })
                        ->preload()
                        ->live()
                        ->label('Siswa'),
                    Select::make('keterangan')
                        ->options([
                            "Hadir" => "Hadir",
                            "Tidak Hadir" => "Tidak Hadir",
                            "Sakit" => "Sakit",

                        ])
                        ->required(),
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
                'guru_id' => Auth::user()->id,
                'tanggal' => $get['tanggal'],
                'keterangan' => $row['keterangan']
            ]);
        }

        Absensi::insert($insert);

        return redirect()->to('admin/absensis');
    }
}
