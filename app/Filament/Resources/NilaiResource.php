<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Nilai;
use App\Models\Siswa;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\NilaiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NilaiResource\RelationManagers;
use App\Models\Kelas;
use Filament\Tables\Filters\SelectFilter;

class NilaiResource extends Resource
{
    protected static ?string $model = Nilai::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')
                    ->description('')
                    ->schema([
                        Forms\Components\Select::make('kelas_id')
                            ->relationship('kelas', 'nama')
                            ->preload()
                            ->live()
                            ->required(),
                        Forms\Components\Select::make('periode_id')
                            ->relationship('periode', 'nama')
                            ->required(),
                        Forms\Components\Select::make('mata_pelajaran_id')
                            ->relationship('mapel', 'nama')
                            ->required(),
                        Forms\Components\Select::make('kategori_id')
                            ->relationship('kategori', 'nama')
                            ->required(),
                        Forms\Components\Select::make('guru_id')
                            ->relationship('guru', 'nama')
                            ->required(),

                        Forms\Components\Select::make('siswa_id')
                            ->options(fn (Get $get): Collection => Siswa::query()
                                ->where('kelas_id', $get('kelas_id'))
                                ->pluck('nama', 'id'))
                            ->preload()
                            ->live()
                            ->required(),
                        Forms\Components\TextInput::make('nilai')
                            ->required()
                            ->numeric(),
                    ])
                    ->columns(2),

                // Repeater::make('nilaisiswa')
                //     ->schema([])->columns(2)->columnSpanFull(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kelas.nama')
                    ->sortable(),
                Tables\Columns\TextColumn::make('siswa.nama')
                    ->sortable(),
                Tables\Columns\TextColumn::make('periode.nama')
                    ->sortable(),
                Tables\Columns\TextColumn::make('guru.nama')
                    ->sortable(),
                Tables\Columns\TextColumn::make('mata_pelajaran.nama'),
                Tables\Columns\TextColumn::make('kategori.nama')
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('kelas_id')
                    ->label('Kelas')
                    ->relationship('kelas', 'nama'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNilais::route('/'),
            'create' => Pages\CreateNilai::route('/create'),
            'edit' => Pages\EditNilai::route('/{record}/edit'),
        ];
    }
}
