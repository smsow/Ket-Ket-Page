<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccolandResource\Pages;
use App\Filament\Resources\AccolandResource\RelationManagers;
use App\Models\Accoland;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AccolandResource extends Resource
{
    protected static ?string $model = Accoland::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->required()
                    ->disk('public') // Ensure the disk is configured in config/filesystems.php
                    ->directory('images') // Path to save images
                    ->image()
                    ->maxSize(5 * 1024) // 5MB
                    ->required(),
                Forms\Components\TextInput::make('description1')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image1')
                    ->disk('public') // Ensure the disk is configured in config/filesystems.php
                    ->directory('images') // Path to save images
                    ->image()
                    ->maxSize(5 * 1024), // 5MB
                Forms\Components\TextInput::make('description2')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image2')
                    ->disk('public') // Ensure the disk is configured in config/filesystems.php
                    ->directory('images') // Path to save images
                    ->image()
                    ->maxSize(5 * 1024), // 5MB
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('description')
                    ->limit(50), // Limit the displayed length
                Tables\Columns\ImageColumn::make('image')
                    ->disk('public') // Ensure the disk is configured in config/filesystems.php
                    ->label('Image'), // Optional label for the column
                Tables\Columns\TextColumn::make('description1')
                    ->limit(50), // Limit the displayed length
                Tables\Columns\ImageColumn::make('image1')
                    ->disk('public') // Ensure the disk is configured in config/filesystems.php
                    ->label('Image 1'), // Optional label for the column
                Tables\Columns\TextColumn::make('description2')
                    ->limit(50), // Limit the displayed length
                Tables\Columns\ImageColumn::make('image2')
                    ->disk('public') // Ensure the disk is configured in config/filesystems.php
                    ->label('Image 2'), // Optional label for the column
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
            'index' => Pages\ListAccolands::route('/'),
            'create' => Pages\CreateAccoland::route('/create'),
            'edit' => Pages\EditAccoland::route('/{record}/edit'),
        ];
    }
}
