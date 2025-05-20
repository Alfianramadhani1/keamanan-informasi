<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FacultyResource\Pages;
use App\Models\Faculty;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;

class FacultyResource extends Resource
{
    protected static ?string $model = Faculty::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationGroup = 'Akademik';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('kode_fakultas')
                ->required()
                ->maxLength(10),
            Forms\Components\TextInput::make('nama_fakultas')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('dekan')
                ->maxLength(255),
            Forms\Components\TextInput::make('kontak_email')
                ->email()
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('kode_fakultas')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('nama_fakultas')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('dekan'),
            Tables\Columns\TextColumn::make('kontak_email'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFaculties::route('/'),
            'create' => Pages\CreateFaculty::route('/create'),
            'edit' => Pages\EditFaculty::route('/{record}/edit'),
        ];
    }
}
