<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaticDecouverteResource\Pages;
use App\Models\StaticDecouverte;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class StaticDecouverteResource extends Resource
{
    protected static ?string $model = StaticDecouverte::class;

    protected static ?string $navigationIcon = 'heroicon-o-light-bulb'; // Icone adéquate

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('subtitle')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description'),
                Forms\Components\TextInput::make('search_field')
                    ->label('Champ de recherche'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('subtitle'),
                Tables\Columns\TextColumn::make('description')
                    ->limit(50),
                Tables\Columns\TextColumn::make('search_field')
                    ->label('Champ de recherche'),
            ])
            ->filters([
                // Ajouter des filtres si nécessaire
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStaticDecouvertes::route('/'),
            'create' => Pages\CreateStaticDecouverte::route('/create'),
            'edit' => Pages\EditStaticDecouverte::route('/{record}/edit'),
        ];
    }
}
