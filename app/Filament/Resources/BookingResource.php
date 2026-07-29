<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
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

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-calendar-days';

    protected static string|\UnitEnum|null $navigationGroup = 'Pemesanan & Reservasi';

    protected static ?string $navigationLabel = 'Daftar Reservasi';

    protected static ?string $modelLabel = 'Reservasi Spa';

    protected static ?string $pluralModelLabel = 'Daftar Reservasi Spa';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                SchemaComponents\Group::make()
                    ->schema([
                        SchemaComponents\Section::make('Informasi Pelanggan & Pemesanan')
                            ->schema([
                                FormComponents\TextInput::make('booking_code')
                                    ->label('Kode Booking')
                                    ->disabled()
                                    ->dehydrated(false)
                                    ->placeholder('Otomatis dibuat oleh sistem'),

                                FormComponents\Select::make('spa_service_id')
                                    ->relationship('spaService', 'name')
                                    ->label('Pilihan Layanan Spa')
                                    ->required()
                                    ->searchable()
                                    ->preload()
                                    ->live()
                                    ->afterStateUpdated(function ($state, $set, $get) {
                                        if ($service = SpaService::find($state)) {
                                            $people = (int) ($get('number_of_people') ?? 1);
                                            $set('total_price', $service->price * $people);
                                        }
                                    }),

                                FormComponents\TextInput::make('customer_name')
                                    ->label('Nama Lengkap Pelanggan')
                                    ->required()
                                    ->maxLength(255),

                                FormComponents\TextInput::make('customer_phone')
                                    ->label('Nomor Telepon / WhatsApp')
                                    ->tel()
                                    ->required()
                                    ->maxLength(255),

                                FormComponents\TextInput::make('customer_email')
                                    ->label('Alamat Email')
                                    ->email()
                                    ->maxLength(255),

                                FormComponents\TextInput::make('number_of_people')
                                    ->label('Jumlah Tamu / Orang')
                                    ->numeric()
                                    ->default(1)
                                    ->required()
                                    ->live()
                                    ->afterStateUpdated(function ($state, $set, $get) {
                                        if ($serviceId = $get('spa_service_id')) {
                                            if ($service = SpaService::find($serviceId)) {
                                                $set('total_price', $service->price * (int) $state);
                                            }
                                        }
                                    }),
                            ])->columns(2),

                        SchemaComponents\Section::make('Jadwal Perawatan')
                            ->schema([
                                FormComponents\DatePicker::make('booking_date')
                                    ->label('Tanggal Kedatangan')
                                    ->required()
                                    ->default(now()),

                                FormComponents\TimePicker::make('booking_time')
                                    ->label('Jam Kedatangan')
                                    ->required()
                                    ->default('14:00'),

                                FormComponents\Textarea::make('notes')
                                    ->label('Catatan Khusus Pelanggan')
                                    ->rows(3)
                                    ->columnSpanFull(),
                            ])->columns(2),
                    ])->columnSpan(2),

                SchemaComponents\Group::make()
                    ->schema([
                        SchemaComponents\Section::make('Status & Total Biaya')
                            ->schema([
                                FormComponents\Select::make('status')
                                    ->label('Status Reservasi')
                                    ->options([
                                        'pending' => 'Pending (Menunggu)',
                                        'confirmed' => 'Confirmed (Dikonfirmasi)',
                                        'completed' => 'Completed (Selesai)',
                                        'cancelled' => 'Cancelled (Batal)',
                                    ])
                                    ->default('pending')
                                    ->required(),

                                FormComponents\TextInput::make('total_price')
                                    ->label('Total Biaya (IDR)')
                                    ->numeric()
                                    ->prefix('Rp')
                                    ->required(),
                            ]),
                    ])->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('booking_code')
                    ->label('Kode Booking')
                    ->searchable()
                    ->sortable()
                    ->weight('bold')
                    ->copyable(),

                Tables\Columns\TextColumn::make('customer_name')
                    ->label('Pelanggan')
                    ->searchable()
                    ->sortable()
                    ->description(fn (Booking $record): string => $record->customer_phone),

                Tables\Columns\TextColumn::make('spaService.name')
                    ->label('Layanan Spa')
                    ->searchable()
                    ->wrap(),

                Tables\Columns\TextColumn::make('booking_date')
                    ->label('Jadwal')
                    ->date('d M Y')
                    ->sortable()
                    ->description(fn (Booking $record): string => substr($record->booking_time, 0, 5) . ' WITA'),

                Tables\Columns\TextColumn::make('number_of_people')
                    ->label('Tamu')
                    ->formatStateUsing(fn ($state) => "{$state} orang")
                    ->badge()
                    ->color('gray'),

                Tables\Columns\TextColumn::make('total_price')
                    ->label('Total (IDR)')
                    ->money('IDR', locale: 'id')
                    ->sortable()
                    ->weight('bold')
                    ->color('success'),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (?string $state): string => match ($state) {
                        'pending' => 'warning',
                        'confirmed' => 'info',
                        'completed' => 'success',
                        'cancelled' => 'danger',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (?string $state): string => ucfirst($state ?? 'pending')),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat pada')
                    ->dateTime('d M Y H:i')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('booking_date', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ]),

                Tables\Filters\SelectFilter::make('spa_service_id')
                    ->relationship('spaService', 'name')
                    ->label('Layanan Spa'),
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
