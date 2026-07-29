<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Models\Faq;
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

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-question-mark-circle';

    protected static string|\UnitEnum|null $navigationGroup = 'Pengaturan Aplikasi';

    protected static ?string $navigationLabel = 'FAQ (Pertanyaan Umum)';

    protected static ?string $modelLabel = 'FAQ';

    protected static ?string $pluralModelLabel = 'FAQ (Pertanyaan Umum)';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                FormComponents\Textarea::make('question')
                    ->label('Pertanyaan')
                    ->placeholder('Contoh: Apakah terapis membawa kasur sendiri?')
                    ->required()
                    ->rows(2)
                    ->columnSpanFull(),

                FormComponents\Textarea::make('answer')
                    ->label('Jawaban')
                    ->placeholder('Masukkan penjelasan detail untuk jawaban dari pertanyaan ini...')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),

                FormComponents\TextInput::make('sort_order')
                    ->label('Urutan Tampilan')
                    ->numeric()
                    ->default(0)
                    ->required(),

                FormComponents\Toggle::make('is_active')
                    ->label('Status Aktif (Tampilkan)')
                    ->default(true)
                    ->required(),
            ]);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                InfolistComponents\TextEntry::make('question')
                    ->label('Pertanyaan')
                    ->weight('bold')
                    ->columnSpanFull(),

                InfolistComponents\TextEntry::make('answer')
                    ->label('Jawaban')
                    ->columnSpanFull(),

                InfolistComponents\IconEntry::make('is_active')
                    ->label('Status Aktif')
                    ->boolean(),

                InfolistComponents\TextEntry::make('sort_order')
                    ->label('Urutan Tampilan')
                    ->badge()
                    ->color('info'),

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
            ->defaultSort('sort_order', 'asc')
            ->deferLoading()
            ->columns([
                Tables\Columns\TextColumn::make('question')
                    ->label('Pertanyaan')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->wrap(),

                Tables\Columns\TextColumn::make('answer')
                    ->label('Jawaban')
                    ->limit(60)
                    ->wrap(),

                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Urutan')
                    ->sortable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Status')
                    ->boolean()
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
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Aktif')
                    ->trueLabel('Aktif')
                    ->falseLabel('Tidak Aktif'),
            ])
            ->actions([
                ViewAction::make()
                    ->label('Detail')
                    ->modalHeading('Detail FAQ')
                    ->modalIcon('heroicon-o-eye')
                    ->modalWidth('lg'),

                EditAction::make()
                    ->label('Edit')
                    ->modalHeading('Edit FAQ')
                    ->modalDescription('Perbarui pertanyaan atau jawaban FAQ ini.')
                    ->modalIcon('heroicon-o-pencil-square')
                    ->modalWidth('xl')
                    ->successNotificationTitle('FAQ berhasil diperbarui!'),

                DeleteAction::make()
                    ->label('Hapus')
                    ->modalHeading('Hapus FAQ')
                    ->modalDescription('Apakah Anda yakin ingin menghapus FAQ ini? Tindakan ini tidak dapat dibatalkan.')
                    ->modalIcon('heroicon-o-trash')
                    ->successNotificationTitle('FAQ berhasil dihapus!'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->modalHeading('Hapus FAQ Terpilih')
                        ->successNotificationTitle('FAQ terpilih berhasil dihapus!'),
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
            'index' => Pages\ListFaqs::route('/'),
        ];
    }
}
