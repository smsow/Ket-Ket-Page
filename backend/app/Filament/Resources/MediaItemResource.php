<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MediaItemResource\Pages;
use App\Models\MediaItem;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class MediaItemResource extends Resource
{
    protected static ?string $model = MediaItem::class;

    // Utiliser une icône plus appropriée pour les éléments média
    protected static ?string $navigationIcon = 'heroicon-o-photograph';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->required(),
                Textarea::make('description')
                    ->label('Description')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Description')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMediaItems::route('/'),
            'create' => Pages\CreateMediaItem::route('/create'),
            'edit' => Pages\EditMediaItem::route('/{record}/edit'),
        ];
    }
}
