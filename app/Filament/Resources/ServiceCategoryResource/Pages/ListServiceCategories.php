<?php

namespace App\Filament\Resources\ServiceCategoryResource\Pages;

use App\Filament\Resources\ServiceCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListServiceCategories extends ListRecords
{
    protected static string $resource = ServiceCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Kategori Baru')
                ->modalHeading('Tambah Kategori Layanan Baru')
                ->modalDescription('Tambahkan kategori atau kelompok perawatan spa baru.')
                ->modalIcon('heroicon-o-tag')
                ->modalWidth('xl')
                ->successNotificationTitle('Kategori layanan baru berhasil ditambahkan!'),
        ];
    }
}
