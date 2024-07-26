<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvantageResource\Pages;
use App\Models\Advantage;
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('titre')->sortable()->searchable(),
                TextColumn::make('sous_titre')->sortable()->searchable(),
                TextColumn::make('description')->limit(50),
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
