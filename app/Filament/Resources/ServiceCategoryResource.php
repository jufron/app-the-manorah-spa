<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceCategoryResource\Pages;
use App\Models\ServiceCategory;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components as FormComponents;
use Filament\Infolists\Components as InfolistComponents;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class ServiceCategoryResource extends Resource
{
    protected static ?string $model = ServiceCategory::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-tag';

    protected static string|\UnitEnum|null $navigationGroup = 'Layanan & Harga';

    protected static ?string $navigationLabel = 'Kategori Layanan';

    protected static ?string $modelLabel = 'Kategori Layanan';

    protected static ?string $pluralModelLabel = 'Kategori Layanan';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                FormComponents\Hidden::make('slug')
                    ->dehydrated(),

                FormComponents\TextInput::make('name')
                    ->label('Nama Kategori Layanan')
                    ->placeholder('Contoh: Body Massage & Aromatherapy')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($set, $get, ?string $state) {
                        if (blank($get('slug'))) {
                            $set('slug', \Illuminate\Support\Str::slug($state));
                        }
                    })
                    ->columnSpanFull(),

                FormComponents\TextInput::make('sort_order')
                    ->label('Urutan Tampilan')
                    ->numeric()
                    ->default(0)
                    ->columnSpanFull(),

                FormComponents\Textarea::make('description')
                    ->label('Deskripsi Singkat Kategori')
                    ->placeholder('Masukkan penjelasan singkat mengenai kelompok perawatan ini...')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                InfolistComponents\TextEntry::make('name')
                    ->label('Nama Kategori')
                    ->weight('bold'),

                InfolistComponents\TextEntry::make('slug')
                    ->label('Slug URL')
                    ->badge()
                    ->color('gray'),

                InfolistComponents\TextEntry::make('sort_order')
                    ->label('Urutan Tampilan')
                    ->badge()
                    ->color('info'),

                InfolistComponents\TextEntry::make('spa_services_count')
                    ->label('Jumlah Layanan Spa')
                    ->counts('spaServices')
                    ->badge()
                    ->color('success'),

                InfolistComponents\TextEntry::make('description')
                    ->label('Deskripsi Kategori')
                    ->columnSpanFull(),

                InfolistComponents\TextEntry::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y H:i:s')
                    ->icon('heroicon-o-calendar'),

                InfolistComponents\TextEntry::make('updated_at')
                    ->label('Terakhir Diperbarui')
                    ->dateTime('d M Y H:i:s')
                    ->icon('heroicon-o-clock'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultPaginationPageOption(10)
            ->paginationPageOptions([10, 25, 50, 100])
            ->defaultSort('name', 'asc')
            ->deferLoading()
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Kategori')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('spa_services_count')
                    ->label('Jumlah Layanan')
                    ->counts('spaServices')
                    ->badge()
                    ->color('success'),

                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                ViewAction::make()
                    ->label('Detail')
                    ->modalHeading('Detail Kategori Layanan')
                    ->modalIcon('heroicon-o-eye')
                    ->modalWidth('lg'),

                EditAction::make()
                    ->label('Edit')
                    ->modalHeading('Edit Kategori Layanan')
                    ->modalDescription('Perbarui informasi kelompok perawatan ini.')
                    ->modalIcon('heroicon-o-pencil-square')
                    ->modalWidth('xl')
                    ->successNotificationTitle('Kategori layanan berhasil diperbarui!'),

                DeleteAction::make()
                    ->label('Hapus')
                    ->modalHeading('Hapus Kategori Layanan')
                    ->modalDescription('Apakah Anda yakin ingin menghapus kategori ini? Tindakan ini tidak dapat dibatalkan.')
                    ->modalIcon('heroicon-o-trash')
                    ->successNotificationTitle('Kategori layanan berhasil dihapus!'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->modalHeading('Hapus Kategori Terpilih')
                        ->successNotificationTitle('Kategori layanan terpilih berhasil dihapus!'),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServiceCategories::route('/'),
        ];
    }
}
