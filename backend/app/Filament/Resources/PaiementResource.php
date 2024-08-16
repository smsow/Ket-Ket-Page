<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaiementResource\Pages;
use App\Models\Paiement;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;

class PaiementResource extends Resource
{
    protected static ?string $model = Paiement::class;

    protected static ?string $navigationLabel = 'Paiements';

    protected static ?string $navigationGroup = 'Gestion des Paiements';

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('montant')
                    ->required()
                    ->numeric(),
                DatePicker::make('date_fin')
                    ->required(),
                DatePicker::make('date_creation')
                    ->required(),
                Select::make('abonnement_id')
                    ->relationship('abonnement', 'nom') // Assuming 'nom' is the column in abonnements table
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('montant')->sortable(),
                TextColumn::make('date_fin')->date('d/m/Y')->sortable(),
                TextColumn::make('date_creation')->date('d/m/Y')->sortable(),
                TextColumn::make('abonnement.nom')->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPaiements::route('/'),
            'create' => Pages\CreatePaiement::route('/create'),
            'edit' => Pages\EditPaiement::route('/{record}/edit'),
        ];
    }
}
