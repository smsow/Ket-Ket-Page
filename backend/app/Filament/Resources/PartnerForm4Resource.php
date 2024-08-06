<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerForm4Resource\Pages;
use App\Models\PartnerForm4;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PartnerForm4Resource extends Resource
{
    protected static ?string $model = PartnerForm4::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('prenom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nom')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('numero_telephone')
                    ->required()
                    ->maxLength(20),
                Forms\Components\DatePicker::make('date_disponible')
                    ->required(),
                Forms\Components\TextInput::make('nom_entreprise')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('vous_etes')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description_entreprise')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('prenom'),
                Tables\Columns\TextColumn::make('nom'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('numero_telephone'),
                Tables\Columns\TextColumn::make('date_disponible'),
                Tables\Columns\TextColumn::make('nom_entreprise'),
                Tables\Columns\TextColumn::make('vous_etes'),
                Tables\Columns\TextColumn::make('description_entreprise')
                    ->limit(50),
            ])
            ->filters([
                // Define filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define relations if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPartnerForm4s::route('/'),
            'create' => Pages\CreatePartnerForm4::route('/create'),
            'edit' => Pages\EditPartnerForm4::route('/{record}/edit'),
        ];
    }
}
