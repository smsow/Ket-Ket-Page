<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use App\Models\Activity; // Make sure to include this if you haven't already
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationGroup = 'Gestion des Services';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->required()
                    ->disk('public')
                    ->directory('images')
                    ->image()
                    ->maxSize(5 * 1024),
                Forms\Components\TextInput::make('subtitle')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required(),
                Select::make('activite_id') // Use Select component for the relationship
                    ->relationship('activity', 'text') // Adjust 'text' if necessary
                    ->required(),
                Select::make('partenaire_sport_id')
                    ->relationship('partenaireSport', 'nom') // Correct relationship method
                    ->required(),
                Forms\Components\TextInput::make('horaire')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('prix')
                    ->required()
                    ->numeric()
                    ->step(0.01),
                Forms\Components\TextInput::make('type')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jours')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('subtitle'),
                Tables\Columns\TextColumn::make('description')
                    ->limit(50),
                Tables\Columns\TextColumn::make('activite_id'),
                Tables\Columns\TextColumn::make('partenaire_sport_id'),
                Tables\Columns\TextColumn::make('horaire'),
                Tables\Columns\TextColumn::make('prix'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('jours'),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
