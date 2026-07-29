<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpaServiceResource\Pages;
use App\Models\SpaService;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components as FormComponents;
use Filament\Resources\Resource;
use Filament\Schemas\Components as SchemaComponents;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class SpaServiceResource extends Resource
{
    protected static ?string $model = SpaService::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-sparkles';

    protected static string|\UnitEnum|null $navigationGroup = 'Layanan & Harga';

    protected static ?string $navigationLabel = 'Layanan Spa & Harga';

    protected static ?string $modelLabel = 'Layanan Spa';

    protected static ?string $pluralModelLabel = 'Daftar Layanan Spa';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                SchemaComponents\Group::make()
                    ->schema([
                        SchemaComponents\Section::make('Informasi Layanan Spa')
                            ->schema([
                                FormComponents\Select::make('service_category_id')
                                    ->relationship('category', 'name')
                                    ->label('Kategori Layanan')
                                    ->required()
                                    ->searchable()
                                    ->preload(),

                                FormComponents\TextInput::make('name')
                                    ->label('Nama Layanan Spa')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($set, ?string $state) => $set('slug', \Illuminate\Support\Str::slug($state))),

                                FormComponents\TextInput::make('slug')
                                    ->label('Slug URL')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true),

                                FormComponents\RichEditor::make('description')
                                    ->label('Deskripsi Detail Layanan')
                                    ->columnSpanFull(),
                            ])->columns(2),

                        SchemaComponents\Section::make('Durasi & Penetapan Harga')
                            ->schema([
                                FormComponents\TextInput::make('duration_minutes')
                                    ->label('Durasi Perawatan (Menit)')
                                    ->numeric()
                                    ->suffix('Menit')
                                    ->default(60)
                                    ->required(),

                                FormComponents\TextInput::make('price')
                                    ->label('Harga Layanan (IDR)')
                                    ->numeric()
                                    ->prefix('Rp')
                                    ->required(),
                            ])->columns(2),
                    ])->columnSpan(2),

                SchemaComponents\Group::make()
                    ->schema([
                        SchemaComponents\Section::make('Media & Status')
                            ->schema([
                                FormComponents\FileUpload::make('image')
                                    ->label('Foto / Thumbnail Layanan')
                                    ->image()
                                    ->directory('spa-services')
                                    ->columnSpanFull(),

                                FormComponents\Toggle::make('is_active')
                                    ->label('Status Layanan Aktif')
                                    ->default(true)
                                    ->helperText('Tampilkan layanan ini pada katalog pelanggan.'),

                                FormComponents\Toggle::make('is_featured')
                                    ->label('Layanan Unggulan (Featured)')
                                    ->default(false)
                                    ->helperText('Sorot di halaman utama website.'),
                            ]),
                    ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Foto')
                    ->circular(),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Layanan')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Kategori')
                    ->badge()
                    ->color('info')
                    ->sortable(),

                Tables\Columns\TextColumn::make('duration_minutes')
                    ->label('Durasi')
                    ->formatStateUsing(fn ($state) => "{$state} mnt")
                    ->badge()
                    ->color('gray')
                    ->sortable(),

                Tables\Columns\TextColumn::make('price')
                    ->label('Harga (IDR)')
                    ->money('IDR', locale: 'id')
                    ->sortable()
                    ->weight('bold')
                    ->color('success'),

                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Unggulan')
                    ->boolean()
                    ->toggleable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Status Aktif')
                    ->boolean()
                    ->toggleable(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('service_category_id')
                    ->relationship('category', 'name')
                    ->label('Kategori Layanan'),

                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Status Layanan'),

                Tables\Filters\TernaryFilter::make('is_featured')
                    ->label('Layanan Unggulan'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
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
            'index' => Pages\ListSpaServices::route('/'),
            'create' => Pages\CreateSpaService::route('/create'),
            'edit' => Pages\EditSpaService::route('/{record}/edit'),
        ];
    }
}
