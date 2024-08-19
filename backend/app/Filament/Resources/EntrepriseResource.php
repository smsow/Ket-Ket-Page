<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EntrepriseResource\Pages;
use App\Models\Entreprise;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;

class EntrepriseResource extends Resource
{
    protected static ?string $model = Entreprise::class;
    protected static ?string $navigationGroup = 'Entreprises'; 
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('numero')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('siege')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('secteur_activite')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nombre_employes')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('quartier')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date_creation')
                    ->required(),
                Forms\Components\DatePicker::make('date_modification'),
                Forms\Components\TextInput::make('latitude')
                    ->numeric(),
                Forms\Components\TextInput::make('longitude')
                    ->numeric(),
                // Forms\Components\FileUpload::make('images')
                //     ->disk('public')
                //     ->directory('images')
                //     ->nullable(),
                Forms\Components\Select::make('contact_id')
                    ->relationship('contactPartenaire', 'nom')
                    ->nullable(),
                Forms\Components\Select::make('adresse_id')
                    ->relationship('adresse', 'numero')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom'),
                TextColumn::make('numero'),
                TextColumn::make('siege'),
                TextColumn::make('secteur_activite'),
                TextColumn::make('nombre_employes'),
                TextColumn::make('quartier'),
                TextColumn::make('date_creation'),
                TextColumn::make('date_modification'),
                TextColumn::make('latitude'),
                TextColumn::make('longitude'),
                TextColumn::make('contactPartenaire.nom')->label('Contact'),
                TextColumn::make('adresse.numero')->label('Adresse'),
            ])
            ->filters([
                // Add filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEntreprises::route('/'),
            'create' => Pages\CreateEntreprise::route('/create'),
            'edit' => Pages\EditEntreprise::route('/{record}/edit'),
        ];
    }
}
