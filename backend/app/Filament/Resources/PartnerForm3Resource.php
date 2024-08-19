<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerForm3Resource\Pages;
use App\Models\PartnerForm3;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PartnerForm3Resource extends Resource
{
    protected static ?string $model = PartnerForm3::class;
    protected static ?string $navigationGroup = 'Gestion des Partenaires Formulaire 3 ';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('prenom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('numero_telephone')
                    ->required()
                    ->maxLength(20),
                Forms\Components\DatePicker::make('date_disponible')
                    ->required(),
                Forms\Components\TextInput::make('nom_entreprise')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description_entreprise')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('prenom')->sortable(),
                Tables\Columns\TextColumn::make('nom')->sortable(),
                Tables\Columns\TextColumn::make('email')->sortable(),
                Tables\Columns\TextColumn::make('numero_telephone')->sortable(),
                Tables\Columns\TextColumn::make('date_disponible')->sortable(),
                Tables\Columns\TextColumn::make('nom_entreprise')->sortable(),
                Tables\Columns\TextColumn::make('description_entreprise')->limit(50),
            ])
            ->filters([
                // Ajoutez des filtres si nécessaire
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
            // Définir les relations si nécessaire
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPartnerForm3s::route('/'),
            'create' => Pages\CreatePartnerForm3::route('/create'),
            'edit' => Pages\EditPartnerForm3::route('/{record}/edit'),
        ];
    }
}
