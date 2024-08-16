<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbonnementResource\Pages;
use App\Models\Abonnement;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;

class AbonnementResource extends Resource
{
    protected static ?string $model = Abonnement::class;

    protected static ?string $navigationLabel = 'Abonnements';

    protected static ?string $navigationGroup = 'Gestion des Abonnements';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nom')->required(),
                Select::make('client_id')
                    ->relationship('client', 'nom')
                    ->required(),
                Select::make('service_id')
                    ->relationship('service', 'title')
                    ->required(),
                TextInput::make('duree')
                    ->required()
                    ->numeric(),
                DatePicker::make('date_fin')->required(),
                DatePicker::make('date_creation')->required(),
                TextInput::make('type')->required(),
                TextInput::make('status')->required(),
                DatePicker::make('date_debut')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nom')->sortable()->searchable(),
                TextColumn::make('client.nom')->sortable()->searchable(),
                TextColumn::make('service.title')->sortable()->searchable(),
                TextColumn::make('duree')->sortable(),
                TextColumn::make('date_fin') // Use formatted accessor
                    ->sortable(),
                TextColumn::make('date_creation') // Use formatted accessor
                    ->sortable(),
                TextColumn::make('type')->sortable(),
                TextColumn::make('status')->sortable(),
                TextColumn::make('date_debut') // Use formatted accessor
                    ->sortable(),
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
            'index' => Pages\ListAbonnements::route('/'),
            'create' => Pages\CreateAbonnement::route('/create'),
            'edit' => Pages\EditAbonnement::route('/{record}/edit'),
        ];
    }
}
