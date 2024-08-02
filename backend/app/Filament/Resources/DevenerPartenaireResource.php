<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DevenerPartenaireResource\Pages;
use App\Models\DevenerPartenaire;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;

class DevenerPartenaireResource extends Resource
{
    protected static ?string $model = DevenerPartenaire::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('subtitle')->required(),
                Forms\Components\TextInput::make('cart_1')->required(),
                Forms\Components\TextInput::make('cart_2')->required(),
                Forms\Components\TextInput::make('cart_3')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('subtitle'),
                Tables\Columns\TextColumn::make('cart_1'),
                Tables\Columns\TextColumn::make('cart_2'),
                Tables\Columns\TextColumn::make('cart_3'),
            ])
            ->filters([
                //
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDevenerPartenaires::route('/'),
            'create' => Pages\CreateDevenerPartenaire::route('/create'),
            'edit' => Pages\EditDevenerPartenaire::route('/{record}/edit'),
        ];
    }
}
