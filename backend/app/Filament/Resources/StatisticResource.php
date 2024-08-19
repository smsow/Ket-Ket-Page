<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatisticResource\Pages;
use App\Filament\Resources\StatisticResource\RelationManagers;
use App\Models\Statistic;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class StatisticResource extends Resource
{
    protected static ?string $model = Statistic::class;
    protected static ?string $navigationGroup = 'Gestion Satisfactions';

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('clients_satisfaits')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('avis_rares')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('annees_experience')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('sports_offerts')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('additional_column1')
                    ->maxLength(255),
                Forms\Components\TextInput::make('additional_column2')
                    ->maxLength(255),
                Forms\Components\TextInput::make('additional_column3')
                    ->maxLength(255),
                Forms\Components\TextInput::make('additional_column4')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('clients_satisfaits')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('avis_rares')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('annees_experience')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('sports_offerts')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('additional_column1')
                    ->limit(50),
                Tables\Columns\TextColumn::make('additional_column2')
                    ->limit(50),
                Tables\Columns\TextColumn::make('additional_column3')
                    ->limit(50),
                Tables\Columns\TextColumn::make('additional_column4')
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
            'index' => Pages\ListStatistics::route('/'),
            'create' => Pages\CreateStatistic::route('/create'),
            'edit' => Pages\EditStatistic::route('/{record}/edit'),
        ];
    }
}
