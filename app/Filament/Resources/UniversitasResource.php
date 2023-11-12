<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Universitas;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UniversitasResource\Pages;
use App\Filament\Resources\UniversitasResource\RelationManagers;

class UniversitasResource extends Resource
{
    protected static ?string $model = Universitas::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    // berkaitan dengan form pengisian
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('universitas')->label('Nama Universitas')->required()->unique(ignorable: fn ($record) => $record),
                    ])
                    ->columns(1),
            ]);
    }

    // berkaitan dengan table
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('universitas')->sortable()->searchable(),
            ])
            ->filters([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUniversitas::route('/'),
            'create' => Pages\CreateUniversitas::route('/create'),
            'edit' => Pages\EditUniversitas::route('/{record}/edit'),
        ];
    }
}
