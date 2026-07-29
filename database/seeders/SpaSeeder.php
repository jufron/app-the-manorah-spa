<?php

namespace Database\Seeders;

use App\Models\AppSetting;
use App\Models\Booking;
use App\Models\ServiceCategory;
use App\Models\SpaService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SpaSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Categories
        $massageCat = ServiceCategory::create([
            'name' => 'Massage & Body Therapy',
            'slug' => 'massage-body-therapy',
            'description' => 'Terapi pijat tradisional & modern untuk pemulihan energi dan relaksasi mendalam.',
            'icon' => 'heroicon-o-sparkles',
            'sort_order' => 1,
        ]);

        $facialCat = ServiceCategory::create([
            'name' => 'Facial & Skincare',
            'slug' => 'facial-skincare',
            'description' => 'Perawatan wajah alami untuk kulit berseri, tampak muda, dan lebih sehat.',
            'icon' => 'heroicon-o-face-smile',
            'sort_order' => 2,
        ]);

        $bodyCat = ServiceCategory::create([
            'name' => 'Body Scrub & Spa Package',
            'slug' => 'body-scrub-spa-package',
            'description' => 'Lulur luluran mewah, rendaman bunga, dan perawatan tubuh menyeluruh.',
            'icon' => 'heroicon-o-gift',
            'sort_order' => 3,
        ]);

        // 2. Spa Services
        $s1 = SpaService::create([
            'service_category_id' => $massageCat->id,
            'name' => 'Manorah Signature Swedish Massage',
            'slug' => 'manorah-signature-swedish-massage',
            'description' => 'Pijatan khas Manorah mengombinasikan Swedish massage dan minyak aromaterapi esensial murni.',
            'duration_minutes' => 90,
            'price' => 350000,
            'is_active' => true,
            'is_featured' => true,
        ]);

        $s2 = SpaService::create([
            'service_category_id' => $massageCat->id,
            'name' => 'Hot Stone Volcanic Therapy',
            'slug' => 'hot-stone-volcanic-therapy',
            'description' => 'Terapi batu hangat vulkanik alami untuk meredakan ketegangan otot dan melancarkan sirkulasi darah.',
            'duration_minutes' => 120,
            'price' => 500000,
            'is_active' => true,
            'is_featured' => true,
        ]);

        $s3 = SpaService::create([
            'service_category_id' => $facialCat->id,
            'name' => 'Gold Collagen Luxury Facial',
            'slug' => 'gold-collagen-luxury-facial',
            'description' => 'Facial mewah dengan masker emas 24k dan serum kolagen murni untuk regenerasi sel kulit.',
            'duration_minutes' => 60,
            'price' => 450000,
            'is_active' => true,
            'is_featured' => false,
        ]);

        $s4 = SpaService::create([
            'service_category_id' => $bodyCat->id,
            'name' => 'Rose Petal & Milk Bath Ritual',
            'slug' => 'rose-petal-milk-bath-ritual',
            'description' => 'Perawatan lulur rempah Bali dilanjutkan dengan berendam dalam kelopak mawar dan susu murni.',
            'duration_minutes' => 90,
            'price' => 600000,
            'is_active' => true,
            'is_featured' => true,
        ]);

        // 3. App Settings
        $settings = [
            [
                'key' => 'site_name',
                'label' => 'Nama Website / Spa',
                'value' => 'The Manorah Spa & Wellness',
                'type' => 'text',
                'group' => 'general',
            ],
            [
                'key' => 'site_tagline',
                'label' => 'Tagline / Slogan',
                'value' => 'Sanctuary of Healing & Luxury Relaxation',
                'type' => 'text',
                'group' => 'general',
            ],
            [
                'key' => 'whatsapp_number',
                'label' => 'Nomor WhatsApp Pemesanan',
                'value' => '+6281234567890',
                'type' => 'text',
                'group' => 'contact',
            ],
            [
                'key' => 'email_contact',
                'label' => 'Email Kontak',
                'value' => 'info@themanorahspa.com',
                'type' => 'text',
                'group' => 'contact',
            ],
            [
                'key' => 'address',
                'label' => 'Alamat Spa',
                'value' => 'Jl. Sunset Road No. 88, Seminyak, Bali',
                'type' => 'textarea',
                'group' => 'contact',
            ],
            [
                'key' => 'opening_hours',
                'label' => 'Jam Operasional',
                'value' => 'Senin - Minggu: 09:00 - 22:00 WITA',
                'type' => 'text',
                'group' => 'general',
            ],
        ];

        foreach ($settings as $st) {
            AppSetting::create($st);
        }

        // 4. Sample Bookings
        Booking::create([
            'booking_code' => 'MNR-882190',
            'customer_name' => 'Siti Rahmawati',
            'customer_phone' => '081298765432',
            'customer_email' => 'siti.rahmawati@gmail.com',
            'spa_service_id' => $s1->id,
            'booking_date' => Carbon::today(),
            'booking_time' => '14:00:00',
            'number_of_people' => 2,
            'total_price' => 700000,
            'status' => 'confirmed',
            'notes' => 'Minta ruangan pasangan (couple room).',
        ]);

        Booking::create([
            'booking_code' => 'MNR-901234',
            'customer_name' => 'Budi Santoso',
            'customer_phone' => '085712345678',
            'customer_email' => 'budi.santoso@yahoo.com',
            'spa_service_id' => $s2->id,
            'booking_date' => Carbon::today(),
            'booking_time' => '16:30:00',
            'number_of_people' => 1,
            'total_price' => 500000,
            'status' => 'pending',
            'notes' => 'Alergi minyak kelapa, gunakan minyak zaitun.',
        ]);

        Booking::create([
            'booking_code' => 'MNR-773412',
            'customer_name' => 'Amanda Miller',
            'customer_phone' => '082133445566',
            'customer_email' => 'amanda.m@gmail.com',
            'spa_service_id' => $s4->id,
            'booking_date' => Carbon::yesterday(),
            'booking_time' => '11:00:00',
            'number_of_people' => 1,
            'total_price' => 600000,
            'status' => 'completed',
            'notes' => 'Pembayaran via QRIS telah selesai.',
        ]);
    }
}
