<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use App\Models\SpaService;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SpaStatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $totalServices = SpaService::where('is_active', true)->count();
        $todayBookings = Booking::whereDate('booking_date', today())->count();
        $totalRevenue = Booking::where('status', '!=', 'cancelled')->sum('total_price');
        $totalCustomers = Booking::distinct('customer_phone')->count('customer_phone');

        return [
            Stat::make('Layanan Spa Aktif', $totalServices . ' Paket')
                ->description('Total perawatan spa yang tersedia')
                ->descriptionIcon('heroicon-m-sparkles')
                ->color('amber'),

            Stat::make('Reservasi Hari Ini', $todayBookings . ' Pemesanan')
                ->description('Jadwal kedatangan pelanggan hari ini')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('info'),

            Stat::make('Estimasi Pendapatan', 'Rp ' . number_format($totalRevenue, 0, ',', '.'))
                ->description('Total omset reservasi dikonfirmasi')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('success'),

            Stat::make('Total Pelanggan', $totalCustomers . ' Orang')
                ->description('Pelanggan terdaftar dalam sistem')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('warning'),
        ];
    }
}
