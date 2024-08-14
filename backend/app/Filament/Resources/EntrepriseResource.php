<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EntrepriseResource\Pages;
use App\Filament\Resources\EntrepriseResource\RelationManagers;
use App\Models\Entreprise;
use App\Models\ContactPartenaire;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EntrepriseResource extends Resource
{
    protected static ?string $model = Entreprise::class;

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
                    ->numeric(),
                Forms\Components\TextInput::make('siege')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('secteur_activite')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nombre_employes')
                    ->nullable()
                    ->numeric(),
                Forms\Components\TextInput::make('quartier')
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date_creation')
                    ->nullable(),
                Forms\Components\DatePicker::make('date_modification')
                    ->nullable(),
                Forms\Components\TextInput::make('latitude')
                    ->nullable()
                    ->numeric(),
                Forms\Components\TextInput::make('longitude')
                    ->nullable()
                    ->numeric(),
            // Forms\Components\FileUpload::make('images')
            // ->disk('public')
            // ->directory('images')
            // ->required()
            // ->image()
            // ->maxSize(5 * 1024),
                Forms\Components\Select::make('contact_id')
                    ->label('Contact Partenaire')
                    ->relationship('contactPartenaire', 'nom')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('numero')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('siege')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('secteur_activite')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nombre_employes')
                    ->sortable(),
                Tables\Columns\TextColumn::make('quartier')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_creation')
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_modification')
                    ->sortable(),
                Tables\Columns\TextColumn::make('latitude')
                    ->sortable(),
                Tables\Columns\TextColumn::make('longitude')
                    ->sortable(),
                //     Tables\Columns\ImageColumn::make('images')
                // ->disk('public')
                // ->circular(), 
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

    public static function getRelations(): array
    {
        return [
            // Define any relationships if needed
        ];
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
