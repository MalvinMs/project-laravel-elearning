<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Foto;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use App\Filament\Resources\FotoResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FotoResource\RelationManagers;

class FotoResource extends Resource
{
    protected static ?string $model = Foto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Web Profile';
    protected static ?string $navigationLabel = 'Foto';
    protected static ?string $modelLabel = 'Foto';
    protected static ?string $pluralModelLabel = 'Foto';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\FileUpload::make('foto')
                            ->required()
                            ->image()
                            ->disk('public'),
                        Forms\Components\TextInput::make('judul')
                            ->required()
                            ->maxLength(255),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
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
            'index' => Pages\ListFotos::route('/'),
            'create' => Pages\CreateFoto::route('/create'),
            'edit' => Pages\EditFoto::route('/{record}/edit'),
        ];
    }
}
