<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdresseResource\Pages;
use App\Models\Adresse;
use Filament\Resources\Resource;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class AdresseResource extends Resource
{
    protected static ?string $model = Adresse::class;

    protected static ?string $navigationIcon = 'heroicon-o-location-marker';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('numero')
                    ->required()
                    ->maxLength(255),
                TextInput::make('rue')
                    ->required()
                    ->maxLength(255),
                TextInput::make('quartier')
                    ->required()
                    ->maxLength(255),
                TextInput::make('ville')
                    ->required()
                    ->maxLength(255),
                TextInput::make('pays')
                    ->required()
                    ->maxLength(255),
                TextInput::make('latitude')
                    ->required()
                    ->numeric(),
                TextInput::make('longitude')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('numero'),
                TextColumn::make('rue'),
                TextColumn::make('quartier'),
                TextColumn::make('ville'),
                TextColumn::make('pays'),
                TextColumn::make('latitude'),
                TextColumn::make('longitude'),
            ])
            ->filters([
                // Define filters if needed
            ])
            ->actions([
                // Define actions if needed
            ])
            ->bulkActions([
                // Define bulk actions if needed
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAdresses::route('/'),
            'create' => Pages\CreateAdresse::route('/create'),
            'edit' => Pages\EditAdresse::route('/{record}/edit'),
        ];
    }
}
