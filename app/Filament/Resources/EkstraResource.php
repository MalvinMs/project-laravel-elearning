<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Ekstra;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EkstraResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EkstraResource\RelationManagers;
use Illuminate\Database\Eloquent\Collection;

class EkstraResource extends Resource
{
    protected static ?string $model = Ekstra::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Ekstrakurikuler';
    protected static ?string $modelLabel = 'Ekstrakurikuler';
    protected static ?string $pluralModelLabel = 'Ekstrakurikuler';
    protected static ?string $navigationGroup = 'Web Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Ekstrakurikuler')
                    ->schema([
                        Forms\Components\TextInput::make('judul')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('foto')
                            ->required()
                            ->image()
                            ->disk('public'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('foto'),

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
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->after(
                            function (Collection $record) {
                                foreach ($record as $key => $value) {
                                    if ($value->foto) {
                                        Storage::disk('public')->delete($value->foto);
                                    }
                                }
                            }
                        ),
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
            'index' => Pages\ListEkstras::route('/'),
            'create' => Pages\CreateEkstra::route('/create'),
            'edit' => Pages\EditEkstra::route('/{record}/edit'),
        ];
    }
}
