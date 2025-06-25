<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriResource\Pages;
use App\Filament\Resources\KategoriResource\RelationManagers;
use App\Models\Kategori;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KategoriResource extends Resource
{
    protected static ?string $model = Kategori::class;

    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $navigationLabel = 'Categories';
    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $modelLabel = 'Category';
    protected static ?string $pluralModelLabel = 'Categories';

    public static function getBreadcrumb(): string
    {
        return static::$pluralModelLabel;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Category Name')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->columnSpanFull(),
                FileUpload::make('icon')
                    ->label('Icon')
                    ->image()
                    ->directory('kategori-icons')
                    ->disk('public')
                    ->maxSize(5024)
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('deskripsi')
                    ->label('Description')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Category Name')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('icon')
                    ->label('Icon')
                    ->circular()
                    ->sortable(),
                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make()->color('primary'),
                    Tables\Actions\EditAction::make()->color('warning'),
                    Tables\Actions\DeleteAction::make()
                        ->modalHeading('Delete Category')
                        ->modalDescription('Are you sure you want to delete the selected category?')
                        ->successNotificationMessage("Category deleted."),
                    Tables\Actions\RestoreAction::make()->color('success')
                        ->modalHeading('Restore Category')
                        ->modalDescription('Are you sure you want to restore the selected category?'),
                    Tables\Actions\ForceDeleteAction::make()
                        ->modalHeading('Force Delete Category')
                        ->modalDescription('Are you sure you want to permanently delete the selected category?')
                        ->successNotificationMessage("Category permanently deleted."),
                ])->label('Actions')

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->modalHeading('Delete Categories')
                        ->modalDescription('Are you sure you want to delete the selected categories?')
                        ->successNotificationMessage("Categories deleted."),
                    Tables\Actions\ForceDeleteBulkAction::make()
                        ->modalHeading('Force Delete Categories')
                        ->modalDescription('Are you sure you want to permanently delete the selected categories?')
                        ->successNotificationMessage("Categories permanently deleted."),
                    Tables\Actions\RestoreBulkAction::make()->color('success')
                        ->modalHeading('Restore Categories')
                        ->modalDescription('Are you sure you want to restore the selected categories?')
                        ->successNotificationMessage("Categories restored.")
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
            'index' => Pages\ListKategoris::route('/'),
            'create' => Pages\CreateKategori::route('/create'),
            'edit' => Pages\EditKategori::route('/{record}/edit'),
        ];
    }
}
