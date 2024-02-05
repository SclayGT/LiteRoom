<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\TambahBuku;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TambahBukuResource\Pages;
use App\Filament\Resources\TambahBukuResource\RelationManagers;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class TambahBukuResource extends Resource
{
    protected static ?string $model = TambahBuku::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
        Card::make()
                ->schema([
                    Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxlength(255),
                    Forms\Components\FileUpload::make('thumbnail')
                    ->required()->image()->disk('public'),
                    // ->maxlength(255),
                    Forms\Components\RichEditor::make('deskripsi')
                    ->required(),
                    Forms\Components\Select::make('genre')->options(
                        ['Roman' => 'Roman',
                        'Horor' => 'Horor',
                        'Klasik' => 'Klasik',
                        'Puisi' => 'Puisi',
                        'Spritual' => 'Spritual',
                        'Fantasi' => 'Fantasi',
                    ]),
                    Forms\Components\TextInput::make('link')
                    ->required()
                    ->maxlength(255),
                    Forms\Components\TextInput::make('view')
                    ->required()
                    ->maxlength(255),
                    Forms\Components\TextInput::make('chapter')
                    ->required()
                    ->maxlength(255),
                    Forms\Components\TextInput::make('vote')
                    ->required()
                    ->maxlength(255),
                    Forms\Components\TextInput::make('author')
                    ->required()
                    ->maxlength(255),
                    Forms\Components\TextInput::make('date')
                    ->required()
                    ->maxlength(255),
                    Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxlength(255)
                ])
                
                // ->columns(2),
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title') ->sortable()->searchable(),
                ImageColumn::make('thumbnail') ->sortable()->searchable(),
                TextColumn::make('genre') ->sortable()->searchable(),
                // TextColumn::make('deskripsi') ->sortable()->searchable(),
                // TextColumn::make('link') ->sortable()->searchable(),
                TextColumn::make('view') ->sortable()->searchable(),
                TextColumn::make('chapter') ->sortable()->searchable(),
                TextColumn::make('created_at') ->dateTime()->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()->after(function (Collection 
                $records) {
                    foreach($records as $key => $value){
                        if($value ->thumbnail){
                            Storage::disk('public')->delete($value ->thumbnail);
                        }
                    }
                }),
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
            'index' => Pages\ListTambahBukus::route('/'),
            'create' => Pages\CreateTambahBuku::route('/create'),
            'edit' => Pages\EditTambahBuku::route('/{record}/edit'),
        ];
    }    
}
