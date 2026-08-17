<?php

namespace App\Filament\Widgets;

use App\Models\AppSetting;
use App\Models\ServiceCategory;
use App\Models\SpaService;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SpaStatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $totalServices = SpaService::where('is_active', true)->count();
        $featuredServices = SpaService::where('is_featured', true)->count();
        $totalCategories = ServiceCategory::count();
        $totalSettings = AppSetting::count();

        return [
            Stat::make('Layanan Spa Aktif', $totalServices . ' Paket')
                ->description('Total perawatan spa yang tersedia')
                ->descriptionIcon('heroicon-m-sparkles')
                ->color('amber'),

            Stat::make('Layanan Unggulan', $featuredServices . ' Paket')
                ->description('Paket spa pilihan (Featured)')
                ->descriptionIcon('heroicon-m-star')
                ->color('rose'),

            Stat::make('Kategori Perawatan', $totalCategories . ' Kategori')
                ->description('Kelompok kategori layanan spa')
                ->descriptionIcon('heroicon-m-squares-2x2')
                ->color('emerald'),

            Stat::make('Pengaturan Web', $totalSettings . ' Item')
                ->description('Konfigurasi kontak & aplikasi')
                ->descriptionIcon('heroicon-m-cog-6-tooth')
                ->color('info'),
        ];
    }
}
