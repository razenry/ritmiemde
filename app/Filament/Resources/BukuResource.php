<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BukuResource\Pages;
use App\Filament\Resources\BukuResource\RelationManagers;
use App\Models\Buku;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BukuResource extends Resource
{
    protected static ?string $model = Buku::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationLabel = 'Books';
    protected static ?string $modelLabel = 'Book';
    protected static ?string $pluralModelLabel = 'Books';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->label('Title')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('pengarang')
                    ->label('Author')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('penerbit')
                    ->label('Publisher')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun_terbit')
                    ->numeric()
                    ->label('Publication year')
                    ->required(),
                Forms\Components\TextInput::make('bahasa')
                    ->label('Language')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('sinopsis')
                    ->label('Synopsis')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('cover')
                    ->image()
                    ->disk('public')
                    ->directory('covers')
                    ->label('Cover')
                    ->required()
                    ->default(null)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('link')
                    ->url()
                    ->required(),
                Forms\Components\Select::make('kategori_id')
                    ->label('Category')
                    ->relationship('kategori', 'nama')
                    ->required(),
                Forms\Components\Hidden::make('user_id')
                    ->default(auth()->id()),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('judul')

                    ->searchable(),
                Tables\Columns\TextColumn::make('pengarang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('penerbit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_terbit'),
                Tables\Columns\TextColumn::make('bahasa')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('cover')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('kategori.nama')
                    ->label('Category')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Uploaded By')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make()->color('primary'),
                    Tables\Actions\EditAction::make()->color('warning'),
                    Tables\Actions\DeleteAction::make()
                        ->modalHeading('Delete Book')
                        ->modalDescription('Are you sure you want to delete the selected book?')
                        ->successNotificationMessage("Book deleted."),
                    Tables\Actions\RestoreAction::make()->color('success')
                        ->modalHeading('Restore Book')
                        ->modalDescription('Are you sure you want to restore the selected book?'),
                    Tables\Actions\ForceDeleteAction::make()
                        ->modalHeading('Force Delete Book')
                        ->modalDescription('Are you sure you want to permanently delete the selected book?')
                        ->successNotificationMessage("Book permanently deleted."),
                ])->label('Actions')


            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->modalHeading('Delete Books')
                        ->modalDescription('Are you sure you want to delete the selected books?')
                        ->successNotificationMessage("Books deleted."),
                    Tables\Actions\ForceDeleteBulkAction::make()
                        ->modalHeading('Force Delete Books')
                        ->modalDescription('Are you sure you want to permanently delete the selected books?')
                        ->successNotificationMessage("Books permanently deleted."),
                    Tables\Actions\RestoreBulkAction::make()->color('success')
                        ->modalHeading('Restore Books')
                        ->modalDescription('Are you sure you want to restore the selected books?')
                        ->successNotificationMessage("Books restored.")
                ]),
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
            'index' => Pages\ListBukus::route('/'),
            'create' => Pages\CreateBuku::route('/create'),
            'view' => Pages\ViewBuku::route('/{record}'),
            'edit' => Pages\EditBuku::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
