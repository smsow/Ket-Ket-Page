<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Models\Client;
use App\Models\Entreprise;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Gestion des Clients';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('abonnement')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('historique_paiement')
                    ->required(),
                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                        'pending' => 'Pending',
                        // Add other statuses as needed
                    ])
                    ->placeholder('Select Status'),
                Forms\Components\Select::make('entreprise_id')
                    ->label('Entreprise')
                    ->relationship('entreprise', 'nom')
                    ->required(),
                Forms\Components\DatePicker::make('date_creation')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('abonnement')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('historique_paiement')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('entreprise.nom')
                    ->label('Entreprise')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_creation')
                    ->sortable()
                    ->date(),
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
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
