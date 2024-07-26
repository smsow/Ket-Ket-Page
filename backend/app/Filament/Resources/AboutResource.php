<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Models\About;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;
    
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required()->maxLength(255),
                Forms\Components\Textarea::make('description')->required(),
                Forms\Components\FileUpload::make('image1')
                    ->required()
                    ->image() // Ensures the field is used for image uploads
                    ->maxSize(5 * 1024) // 5MB limit
                    ->directory('images'), // Directory to store the images
                Forms\Components\FileUpload::make('image2')
                    ->required()
                    ->image()
                    ->maxSize(5 * 1024)
                    ->directory('images'),
                Forms\Components\FileUpload::make('image3')
                    ->required()
                    ->image()
                    ->maxSize(5 * 1024)
                    ->directory('images'),
                Forms\Components\FileUpload::make('image4')
                    ->required()
                    ->image()
                    ->maxSize(5 * 1024)
                    ->directory('images'),
                Forms\Components\Textarea::make('section1_title')->required(),
                Forms\Components\Textarea::make('section1_content')->required(),
                Forms\Components\Textarea::make('section2_title')->required(),
                Forms\Components\Textarea::make('section2_content')->required(),
                Forms\Components\FileUpload::make('image5')
                    ->required()
                    ->image()
                    ->maxSize(5 * 1024)
                    ->directory('images'),
                Forms\Components\Textarea::make('extra_info')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('description')->limit(50)->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('image1')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('image2')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('image3')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('image4')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('section1_title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('section1_content')->limit(50)->sortable()->searchable(),
                Tables\Columns\TextColumn::make('section2_title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('section2_content')->limit(50)->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('image5')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('extra_info')->limit(50)->sortable()->searchable(),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
