<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FotoWebResource\Pages;
use App\Filament\Resources\FotoWebResource\RelationManagers;
use App\Models\FotoWeb;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FotoWebResource extends Resource
{
    protected static ?string $model = FotoWeb::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Web Profile';
    protected static ?string $navigationLabel = 'Foto Web Profile';
    protected static ?string $modelLabel = 'Foto Web Profile';
    protected static ?string $pluralModelLabel = 'Foto Web Profile';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('key')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('label')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\FileUpload::make('value')
                            ->helperText('Masukkan Foto Format : JPG/PNG')
                            ->required(),
                        Forms\Components\TextInput::make('type')
                            ->required()
                            ->maxLength(255),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('key')
                    ->searchable(),
                Tables\Columns\TextColumn::make('label')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('value')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
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
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListFotoWebs::route('/'),
            'create' => Pages\CreateFotoWeb::route('/create'),
            'edit' => Pages\EditFotoWeb::route('/{record}/edit'),
        ];
    }
}
