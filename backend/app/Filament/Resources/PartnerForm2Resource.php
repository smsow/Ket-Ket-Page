<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerForm2Resource\Pages;
use App\Models\PartnerForm2;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PartnerForm2Resource extends Resource
{
    protected static ?string $model = PartnerForm2::class;
    protected static ?string $navigationGroup = 'Gestion des Partenaires Formulaire 2 ';

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
                    ->maxLength(15),
                Forms\Components\DatePicker::make('date_disponible')
                    ->required(),
                Forms\Components\Textarea::make('description_entreprise')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('prenom'),
                Tables\Columns\TextColumn::make('nom'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('numero_telephone'),
                Tables\Columns\TextColumn::make('date_disponible'),
                Tables\Columns\TextColumn::make('description_entreprise')
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
            'index' => Pages\ListPartnerForm2s::route('/'),
            'create' => Pages\CreatePartnerForm2::route('/create'),
            'edit' => Pages\EditPartnerForm2::route('/{record}/edit'),
        ];
    }
}
