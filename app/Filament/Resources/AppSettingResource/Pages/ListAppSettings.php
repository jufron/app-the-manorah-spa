<?php

namespace App\Filament\Resources\AppSettingResource\Pages;

use App\Filament\Resources\AppSettingResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAppSettings extends ListRecords
{
    protected static string $resource = AppSettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Pengaturan Baru')
                ->modalHeading('Tambah Pengaturan Aplikasi Baru')
                ->modalDescription('Tambahkan variabel atau konfigurasi baru untuk sistem spa.')
                ->modalIcon('heroicon-o-cog-6-tooth')
                ->modalWidth('xl')
                // ->modalBlur()
                ->successNotificationTitle('Pengaturan aplikasi baru berhasil ditambahkan!'),
        ];
    }
}
