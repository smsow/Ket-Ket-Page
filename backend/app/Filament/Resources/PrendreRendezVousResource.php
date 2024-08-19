<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PrendreRendezVousResource\Pages;
use App\Models\PrendreRendezVous;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class PrendreRendezVousResource extends Resource
{
    protected static ?string $model = PrendreRendezVous::class;
    protected static ?string $navigationGroup = 'Gestion des Rendez-vous';

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
                TextInput::make('motif')->required(),Select::make('message')
                ->label('Message')
                ->options([
                    'demande_partenariat' => 'Demande de Partenariat',
                    'demande_demo' => 'Demande Demo',
                    'demande_rendez_vous' => 'Demande Rendez-vous',
                    'demande_etc' => 'Demande etc...',
                ])
                ->required(),
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
                TextColumn::make('message') // Colonne "message" mise à jour pour afficher les valeurs sélectionnées
                    ->label('Message')
                    ->icon('heroicon-o-chat'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
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
