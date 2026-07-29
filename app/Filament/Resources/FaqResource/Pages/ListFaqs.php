<?php

namespace App\Filament\Resources\FaqResource\Pages;

use App\Filament\Resources\FaqResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFaqs extends ListRecords
{
    protected static string $resource = FaqResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah FAQ Baru')
                ->modalHeading('Tambah Pertanyaan & Jawaban FAQ Baru')
                ->modalDescription('Tambahkan item FAQ baru untuk ditampilkan pada aplikasi.')
                ->modalIcon('heroicon-o-question-mark-circle')
                ->modalWidth('xl')
                ->successNotificationTitle('FAQ baru berhasil ditambahkan!'),
        ];
    }
}
