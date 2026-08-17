<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Bagaimana cara melakukan reservasi perawatan spa?',
                'answer' => 'Anda dapat dengan mudah melakukan pemesanan melalui tombol WhatsApp di website kami. Cukup pilih paket layanan, tentukan waktu dan lokasi (rumah, villa, atau hotel), lalu tim kami akan mengonfirmasi pemesanan Anda.',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'Apakah terapis membawa perlengkapan spa sendiri?',
                'answer' => 'Ya, terapis kami datang dengan membawa seluruh perlengkapan profesional secara lengkap, seperti minyak aromaterapi premium, kain/handuk steril, matras/bed portable, dan perlengkapan perawatan sesuai paket pilihan Anda.',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'Area mana saja yang dapat dilayani oleh The Manorah Spa?',
                'answer' => 'Kami melayani layanan home & villa service di berbagai wilayah Bali, meliputi Seminyak, Canggu, Kuta, Denpasar, Sanur, Ubud, Nusa Dua, dan sekitarnya.',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Berapa lama waktu konfirmasi pemesanan sebelum perawatan dilakukan?',
                'answer' => 'Kami menyarankan melakukan pemesanan minimal 1–2 jam sebelum waktu perawatan yang diinginkan agar terapis kami dapat tiba tepat waktu di lokasi Anda.',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Apakah saya bisa memilih terapis (wanita/pria)?',
                'answer' => 'Ya, Anda dapat mengajukan preferensi terapis wanita atau pria saat melakukan komunikasi konfirmasi reservasi via WhatsApp.',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'question' => 'Metode pembayaran apa saja yang diterima?',
                'answer' => 'Kami menerima pembayaran tunai (cash) secara langsung setelah perawatan selesai, serta transfer bank online / QRIS.',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
