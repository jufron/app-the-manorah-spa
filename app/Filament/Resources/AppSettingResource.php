<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppSettingResource\Pages;
use App\Models\AppSetting;
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

class AppSettingResource extends Resource
{
    protected static ?string $model = AppSetting::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string|\UnitEnum|null $navigationGroup = 'Pengaturan Aplikasi';

    protected static ?string $navigationLabel = 'Pengaturan Aplikasi';

    protected static ?string $modelLabel = 'Pengaturan Aplikasi';

    protected static ?string $pluralModelLabel = 'Pengaturan Aplikasi';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                FormComponents\Hidden::make('key')
                    ->dehydrated(),

                FormComponents\TextInput::make('label')
                    ->label('Nama Pengaturan')
                    ->placeholder('Contoh: Banner Utama Website / WhatsApp')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function ($set, $get, ?string $state) {
                        if (blank($get('key'))) {
                            $set('key', \Illuminate\Support\Str::slug($state, '_'));
                        }
                    })
                    ->columnSpanFull(),

                FormComponents\Select::make('group')
                    ->label('Kelompok / Kategori')
                    ->options([
                        'general' => 'Umum (General)',
                        'contact' => 'Kontak & Alamat',
                        'appearance' => 'Tampilan & Banner',
                    ])
                    ->default('general')
                    ->required()
                    ->live()
                    ->columnSpanFull(),

                FormComponents\FileUpload::make('value')
                    ->label('Upload File Gambar / Banner')
                    ->image()
                    ->directory('app-settings')
                    ->visible(fn ($get): bool => $get('group') === 'appearance')
                    ->required(fn ($get): bool => $get('group') === 'appearance')
                    ->columnSpanFull(),

                FormComponents\Textarea::make('value')
                    ->label('Nilai / Isi Pengaturan')
                    ->placeholder('Masukkan nilai atau isi konfigurasi...')
                    ->rows(4)
                    ->hidden(fn ($get): bool => $get('group') === 'appearance')
                    ->required(fn ($get): bool => $get('group') !== 'appearance')
                    ->columnSpanFull(),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                InfolistComponents\TextEntry::make('label')
                    ->label('Nama Pengaturan')
                    ->weight('bold'),

                InfolistComponents\TextEntry::make('key')
                    ->label('Key Sistem')
                    ->badge()
                    ->color('gray'),

                InfolistComponents\TextEntry::make('group')
                    ->label('Kelompok')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'general' => 'info',
                        'contact' => 'success',
                        'appearance' => 'warning',
                        default => 'gray',
                    }),

                InfolistComponents\ImageEntry::make('value')
                    ->label('Gambar / Banner')
                    ->visible(fn (AppSetting $record): bool => $record->group === 'appearance')
                    ->columnSpanFull(),

                InfolistComponents\TextEntry::make('value')
                    ->label('Nilai / Isi Konfigurasi')
                    ->hidden(fn (AppSetting $record): bool => $record->group === 'appearance')
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
            ->defaultSort('group', 'asc')
            ->deferLoading()
            ->columns([
                Tables\Columns\TextColumn::make('label')
                    ->label('Nama Pengaturan')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('key')
                    ->label('Key')
                    ->searchable()
                    ->badge()
                    ->color('gray')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\ImageColumn::make('value')
                    ->label('Nilai / Pratinjau')
                    ->disk('public')
                    ->height(40)
                    ->square()
                    ->visible(fn ($record) => $record && $record->group === 'appearance'),

                Tables\Columns\TextColumn::make('value')
                    ->label('Nilai Konfigurasi')
                    ->limit(50)
                    ->wrap()
                    ->visible(fn ($record) => $record && $record->group !== 'appearance'),

                Tables\Columns\TextColumn::make('group')
                    ->label('Kelompok')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'general' => 'info',
                        'contact' => 'success',
                        'appearance' => 'warning',
                        default => 'gray',
                    }),

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
            ->filters([
                Tables\Filters\SelectFilter::make('group')
                    ->options([
                        'general' => 'Umum',
                        'contact' => 'Kontak',
                        'appearance' => 'Tampilan',
                    ]),
            ])
            ->actions([
                ViewAction::make()
                    ->label('Detail')
                    ->modalHeading('Detail Pengaturan Aplikasi')
                    ->modalIcon('heroicon-o-eye')
                    ->modalWidth('lg'),

                EditAction::make()
                    ->label('Edit')
                    ->modalHeading('Edit Pengaturan Aplikasi')
                    ->modalDescription('Perbarui isi atau konfigurasi variabel sistem ini.')
                    ->modalIcon('heroicon-o-pencil-square')
                    ->modalWidth('xl')
                    ->successNotificationTitle('Pengaturan aplikasi berhasil diperbarui!'),

                DeleteAction::make()
                    ->label('Hapus')
                    ->modalHeading('Hapus Pengaturan Aplikasi')
                    ->modalDescription('Apakah Anda yakin ingin menghapus pengaturan ini? Tindakan ini tidak dapat dibatalkan.')
                    ->modalIcon('heroicon-o-trash')
                    ->successNotificationTitle('Pengaturan aplikasi berhasil dihapus!'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->modalHeading('Hapus Pengaturan Terpilih')
                        ->successNotificationTitle('Pengaturan aplikasi terpilih berhasil dihapus!'),
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
            'index' => Pages\ListAppSettings::route('/'),
        ];
    }
}
