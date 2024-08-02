<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartenaireResource\Pages;
use App\Models\Partenaire;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PartenaireResource extends Resource
{
    protected static ?string $model = Partenaire::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('subtitle')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\Textarea::make('cart_titre')
                    ->required(),
                Forms\Components\Textarea::make('cart_description1')
                    ->required(),
                Forms\Components\Textarea::make('cart_description2')
                    ->required(),
                // Ajout des nouveaux champs
                Forms\Components\Textarea::make('cart_description3')
                    ->required(),
                Forms\Components\Textarea::make('cart_description4')
                    ->required(),
                Forms\Components\Textarea::make('cart_description5')
                    ->required(),
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
                Tables\Columns\TextColumn::make('cart_titre')
                    ->limit(50),
                Tables\Columns\TextColumn::make('cart_description1')
                    ->limit(50),
                Tables\Columns\TextColumn::make('cart_description2')
                    ->limit(50),
                // Ajout des nouveaux champs
                Tables\Columns\TextColumn::make('cart_description3')
                    ->limit(50),
                Tables\Columns\TextColumn::make('cart_description4')
                    ->limit(50),
                Tables\Columns\TextColumn::make('cart_description5')
                    ->limit(50),
            ])
            ->filters([
                // Define filters if needed
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
        return [
            // Define relations if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPartenaires::route('/'),
            'create' => Pages\CreatePartenaire::route('/create'),
            'edit' => Pages\EditPartenaire::route('/{record}/edit'),
        ];
    }
}
