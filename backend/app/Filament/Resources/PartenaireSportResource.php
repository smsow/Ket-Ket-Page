<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartenaireSportResource\Pages;
use App\Filament\Resources\PartenaireSportResource\RelationManagers;
use App\Models\PartenaireSport;
use App\Models\ContactPartenaire;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartenaireSportResource extends Resource
{
    protected static ?string $model = PartenaireSport::class;

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
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('activites')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('horaire')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('equipements')
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\TextInput::make('categorie')
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\TextInput::make('quartier')
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\Select::make('statut')
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ])
                    ->required(),
                Forms\Components\DatePicker::make('date_fin')
                    ->nullable(),
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
            Forms\Components\FileUpload::make('images')
            ->disk('public')
            ->directory('images')
            ->required()
            ->image()
            ->maxSize(5 * 1024),
                Forms\Components\Select::make('contact_id')
                    ->label('Contact Partenaire')
                    ->relationship('contactPartenaire', 'nom')
                    ->nullable(),
                Forms\Components\Textarea::make('description')
                    ->nullable()
                    ->maxLength(500),
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
                Tables\Columns\TextColumn::make('address')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('activites')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('horaire')
                    ->sortable(),
                Tables\Columns\TextColumn::make('equipements')
                    ->sortable(),
                Tables\Columns\TextColumn::make('categorie')
                    ->sortable(),
                Tables\Columns\TextColumn::make('quartier')
                    ->sortable(),
                Tables\Columns\TextColumn::make('statut')
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_fin')
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_creation')
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_modification')
                    ->sortable(),
                Tables\Columns\TextColumn::make('latitude')
                    ->sortable(),
                Tables\Columns\TextColumn::make('longitude')
                    ->sortable(),
                    Tables\Columns\ImageColumn::make('images')
                ->disk('public')
                ->circular(), 
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
            'index' => Pages\ListPartenaireSports::route('/'),
            'create' => Pages\CreatePartenaireSport::route('/create'),
            'edit' => Pages\EditPartenaireSport::route('/{record}/edit'),
        ];
    }
}
