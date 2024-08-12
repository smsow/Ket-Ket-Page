<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrendreRendezVousResource\Pages;
use App\Models\PrendreRendezVous;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;

class PrendreRendezVousResource extends Resource
{
    protected static ?string $model = PrendreRendezVous::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('prenom')->required(),
                TextInput::make('nom')->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('telephone')->required(),
                DatePicker::make('date')->required(),
                TextInput::make('motif')->required(),
                TextInput::make('message')->label('Message')->required(), // Champ "message" ajouté
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('prenom')
                    ->label('Prénom')
                    ->icon('heroicon-o-user'),
                TextColumn::make('nom')
                    ->label('Nom')
                    ->icon('heroicon-o-user-group'),
                TextColumn::make('email')
                    ->label('Email')
                    ->icon('heroicon-o-mail'),
                TextColumn::make('telephone')
                    ->label('Téléphone')
                    ->icon('heroicon-o-phone'),
                TextColumn::make('date')
                    ->label('Date')
                    ->icon('heroicon-o-calendar')
                    ->date(),
                TextColumn::make('motif')
                    ->label('Motif')
                    ->icon('heroicon-o-clipboard-list'),
                TextColumn::make('message') // Colonne "message" ajoutée
                    ->label('Message')
                    ->icon('heroicon-o-chat'),
            ])
            ->filters([
                // Ajoutez ici les filtres nécessaires
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPrendreRendezVouses::route('/'),
            'create' => Pages\CreatePrendreRendezVous::route('/create'),
            'edit' => Pages\EditPrendreRendezVous::route('/{record}/edit'),
        ];
    }
}
