<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\BookingResource;
use App\Models\Booking;
use Filament\Actions\Action;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestBookingsWidget extends BaseWidget
{
    protected static ?int $sort = 2;

    protected int|string|array $columnSpan = 'full';

    protected static ?string $heading = 'Pemesanan & Reservasi Terbaru';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Booking::query()->latest('created_at')->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('booking_code')
                    ->label('Kode Booking')
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('customer_name')
                    ->label('Nama Pelanggan')
                    ->description(fn (Booking $record): string => $record->customer_phone ?? ''),

                Tables\Columns\TextColumn::make('spaService.name')
                    ->label('Layanan Spa'),

                Tables\Columns\TextColumn::make('booking_date')
                    ->label('Tanggal & Jam')
                    ->date('d M Y')
                    ->description(fn (Booking $record): string => $record->booking_time ? substr($record->booking_time, 0, 5) . ' WITA' : ''),

                Tables\Columns\TextColumn::make('total_price')
                    ->label('Total Biaya')
                    ->money('IDR', locale: 'id')
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
            ])
            ->actions([
                Action::make('view')
                    ->label('Lihat Detail')
                    ->icon('heroicon-m-eye')
                    ->url(fn (Booking $record): string => BookingResource::getUrl('edit', ['record' => $record])),
            ]);
    }
}
