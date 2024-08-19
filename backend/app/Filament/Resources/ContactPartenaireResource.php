<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactPartenaireResource\Pages;
use App\Filament\Resources\ContactPartenaireResource\RelationManagers;
use App\Models\ContactPartenaire;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactPartenaireResource extends Resource
{
    protected static ?string $model = ContactPartenaire::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationGroup = 'Contacts Partenaires'; 

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
                Forms\Components\TextInput::make('mail')
                    ->required()
                    ->email(),
                Forms\Components\TextInput::make('position_hierarchique')
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\TextInput::make('poste')
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\TextInput::make('metier')
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('date_creation')
                    ->nullable(),
                Forms\Components\DatePicker::make('date_modification')
                    ->nullable(),
                Forms\Components\TextInput::make('adresse')
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\TextInput::make('quartier')
                    ->nullable()
                    ->maxLength(255),
            Forms\Components\FileUpload::make('images')
                ->disk('public')
                ->directory('images')
                ->required()
                ->image()
                ->maxSize(5 * 1024),
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
                Tables\Columns\TextColumn::make('mail')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('position_hierarchique')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('poste')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('metier')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_creation')
                    ->sortable(),
                Tables\Columns\TextColumn::make('date_modification')
                    ->sortable(),
                Tables\Columns\TextColumn::make('adresse')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('quartier')
                    ->sortable()
                    ->searchable(),
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
            'index' => Pages\ListContactPartenaires::route('/'),
            'create' => Pages\CreateContactPartenaire::route('/create'),
            'edit' => Pages\EditContactPartenaire::route('/{record}/edit'),
        ];
    }
}
