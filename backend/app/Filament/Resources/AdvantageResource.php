<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvantageResource\Pages;
use App\Models\Advantage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class AdvantageResource extends Resource
{
    protected static ?string $model = Advantage::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('titre')
                    ->required()
                    ->maxLength(255),
                TextInput::make('sous_titre')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->required(),

                // New fields
                TextInput::make('sous_titre1')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description1')
                    ->required(),
                TextInput::make('sous_titre2')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description2')
                    ->required(),
                TextInput::make('sous_titre3')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description3')
                    ->required(),
                TextInput::make('sous_titre4')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description4')
                    ->required(),
                TextInput::make('sous_titre5')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description5')
                    ->required(),
                TextInput::make('sous_titre6')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description6')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('titre')->sortable()->searchable(),
                TextColumn::make('sous_titre')->sortable()->searchable(),
                TextColumn::make('description')->limit(50),
                TextColumn::make('sous_titre1')->limit(50),
                TextColumn::make('description1')->limit(50),
                TextColumn::make('sous_titre2')->limit(50),
                TextColumn::make('description2')->limit(50),
                TextColumn::make('sous_titre3')->limit(50),
                TextColumn::make('description3')->limit(50),
                TextColumn::make('sous_titre4')->limit(50),
                TextColumn::make('description4')->limit(50),
                TextColumn::make('sous_titre5')->limit(50),
                TextColumn::make('description5')->limit(50),
                TextColumn::make('sous_titre6')->limit(50),
                TextColumn::make('description6')->limit(50),
            ])
            ->actions([
                EditAction::make(), // Bouton d'édition
                DeleteAction::make(), // Bouton de suppression
            ])
            ->filters([
                // Définissez vos filtres ici
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAdvantages::route('/'),
            'create' => Pages\CreateAdvantage::route('/create'),
            'edit' => Pages\EditAdvantage::route('/{record}/edit'),
        ];
    }
}
