<?php

namespace Database\Seeders;

use App\Models\AppSetting;
use App\Models\ServiceCategory;
use App\Models\SpaService;
use Illuminate\Database\Seeder;

class SpaSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Service Categories
        $massageCat = ServiceCategory::create([
            'name' => 'Massage & Body Therapy',
            'slug' => 'massage-body-therapy',
            'description' => 'Traditional and modern therapeutic body massage designed for deep muscular relaxation and energy restoration.',
            'icon' => 'heroicon-o-sparkles',
            'image' => 'img/home-service.png',
            'sort_order' => 1,
        ]);

        $facialCat = ServiceCategory::create([
            'name' => 'Facial & Skincare',
            'slug' => 'facial-skincare',
            'description' => 'Natural organic facial treatments designed to revitalize, nourish, and bring out your radiant skin glow.',
            'icon' => 'heroicon-o-face-smile',
            'image' => 'img/facial.png',
            'sort_order' => 2,
        ]);

        $bodyCat = ServiceCategory::create([
            'name' => 'Body Scrub & Spa Package',
            'slug' => 'body-scrub-spa-package',
            'description' => 'Luxurious herbal scrubs, floral bath rituals, and holistic body rejuvenation packages.',
            'icon' => 'heroicon-o-gift',
            'image' => 'img/beauty-products.png',
            'sort_order' => 3,
        ]);

        $nailCat = ServiceCategory::create([
            'name' => 'Nail Art & Manicure',
            'slug' => 'nail-art-manicure',
            'description' => 'Exquisite nail care, long-lasting gel polish designs, and relaxing hand & foot spa treatments.',
            'icon' => 'heroicon-o-heart',
            'image' => 'img/nail-art.png',
            'sort_order' => 4,
        ]);

        $lashCat = ServiceCategory::create([
            'name' => 'Eyelash & Lash Extensions',
            'slug' => 'eyelash-extensions',
            'description' => 'Premium silk eyelash extensions, keratin lash lifts, and brow lamination for effortless beauty.',
            'icon' => 'heroicon-o-eye',
            'image' => 'img/eyelash.png',
            'sort_order' => 5,
        ]);

        $waxingCat = ServiceCategory::create([
            'name' => 'Body Waxing & Hair Removal',
            'slug' => 'waxing-hair-removal',
            'description' => 'Gentle, hygienic botanical waxing treatments for smooth, silky, and flawless skin.',
            'icon' => 'heroicon-o-sun',
            'image' => 'img/waxing.png',
            'sort_order' => 6,
        ]);

        // 2. Spa Services

        // Massage Category Services
        SpaService::create([
            'service_category_id' => $massageCat->id,
            'name' => 'Manorah Signature Swedish Massage',
            'slug' => 'manorah-signature-swedish-massage',
            'description' => 'Manorah’s signature therapeutic massage combining Swedish strokes and pure organic aromatherapy essential oils for ultimate muscle tension relief.',
            'duration_minutes' => 90,
            'price' => 350000,
            'image' => 'img/home-service.png',
            'is_active' => true,
            'is_featured' => true,
        ]);

        SpaService::create([
            'service_category_id' => $massageCat->id,
            'name' => 'Hot Stone Volcanic Therapy',
            'slug' => 'hot-stone-volcanic-therapy',
            'description' => 'Natural heated volcanic stones placed along energy meridian points to melt deep muscular stress, boost circulation, and calm the nervous system.',
            'duration_minutes' => 120,
            'price' => 500000,
            'image' => 'img/hot-stone.png',
            'is_active' => true,
            'is_featured' => true,
        ]);

        SpaService::create([
            'service_category_id' => $massageCat->id,
            'name' => 'Deep Tissue & Reflexology Ritual',
            'slug' => 'deep-tissue-reflexology-ritual',
            'description' => 'Targeted pressure-point massage and deep muscle manipulation focusing on chronic fatigue, neck stiffness, and sore back muscles.',
            'duration_minutes' => 90,
            'price' => 400000,
            'image' => 'img/home-service.png',
            'is_active' => true,
            'is_featured' => false,
        ]);

        // Facial Category Services
        SpaService::create([
            'service_category_id' => $facialCat->id,
            'name' => 'Gold Collagen Luxury Facial',
            'slug' => 'gold-collagen-luxury-facial',
            'description' => 'Opulent 24k gold leaf mask combined with pure collagen serum to stimulate cellular skin regeneration and restore youthful firm elasticity.',
            'duration_minutes' => 60,
            'price' => 450000,
            'image' => 'img/facial.png',
            'is_active' => true,
            'is_featured' => true,
        ]);

        SpaService::create([
            'service_category_id' => $facialCat->id,
            'name' => 'Organic Botanical Hydramist Facial',
            'slug' => 'organic-botanical-hydramist-facial',
            'description' => 'Gentle deep-pore purification using organic chamomile and damask rose hydrosol steam to calm sensitive skin and deeply replenish moisture.',
            'duration_minutes' => 60,
            'price' => 350000,
            'image' => 'img/facial.png',
            'is_active' => true,
            'is_featured' => false,
        ]);

        // Body Scrub & Spa Package Services
        SpaService::create([
            'service_category_id' => $bodyCat->id,
            'name' => 'Rose Petal & Milk Bath Ritual',
            'slug' => 'rose-petal-milk-bath-ritual',
            'description' => 'Traditional Balinese spice body scrub followed by a luxurious warm soak in fresh rose petals and organic coconut milk.',
            'duration_minutes' => 90,
            'price' => 600000,
            'image' => 'img/beauty-products.png',
            'is_active' => true,
            'is_featured' => true,
        ]);

        SpaService::create([
            'service_category_id' => $bodyCat->id,
            'name' => 'Royal Jasmine Sea Salt Polish',
            'slug' => 'royal-jasmine-sea-salt-polish',
            'description' => 'Fine sea-salt scrub infused with wild jasmine extracts to gently exfoliate dead skin cells, leaving skin silky smooth and radiant.',
            'duration_minutes' => 90,
            'price' => 550000,
            'image' => 'img/beauty-products.png',
            'is_active' => true,
            'is_featured' => false,
        ]);

        // Nail Art Services
        SpaService::create([
            'service_category_id' => $nailCat->id,
            'name' => 'Manorah Luxury Gel Manicure & Pedicure',
            'slug' => 'manorah-luxury-gel-manicure-pedicure',
            'description' => 'Meticulous nail shaping, cuticle care, organic hand scrub, and long-lasting non-toxic gel polish in your favorite luxury shade.',
            'duration_minutes' => 75,
            'price' => 300000,
            'image' => 'img/nail-art.png',
            'is_active' => true,
            'is_featured' => false,
        ]);

        SpaService::create([
            'service_category_id' => $nailCat->id,
            'name' => 'Botanical Foot Spa & Reflexology Soaking',
            'slug' => 'botanical-foot-spa-reflexology-soaking',
            'description' => 'Soaking feet in Himalayan pink salt and peppermint essential oil, followed by exfoliating scrub and pressure-point foot reflex massage.',
            'duration_minutes' => 60,
            'price' => 250000,
            'image' => 'img/nail-art.png',
            'is_active' => true,
            'is_featured' => false,
        ]);

        // Eyelash Extension Services
        SpaService::create([
            'service_category_id' => $lashCat->id,
            'name' => 'Silk Volume Eyelash Extensions',
            'slug' => 'silk-volume-eyelash-extensions',
            'description' => 'Feather-light Japanese silk lash extensions individually applied to create a natural, voluminous, and alluring eye contour.',
            'duration_minutes' => 90,
            'price' => 380000,
            'image' => 'img/eyelash.png',
            'is_active' => true,
            'is_featured' => true,
        ]);

        SpaService::create([
            'service_category_id' => $lashCat->id,
            'name' => 'Keratin Lash Lift & Dark Tinting',
            'slug' => 'keratin-lash-lift-dark-tinting',
            'description' => 'Nourishing keratin infusion treatment to lift, curl, and tint your natural lashes for up to 8 weeks of effortless glam.',
            'duration_minutes' => 60,
            'price' => 280000,
            'image' => 'img/eyelash.png',
            'is_active' => true,
            'is_featured' => false,
        ]);

        // Waxing Services
        SpaService::create([
            'service_category_id' => $waxingCat->id,
            'name' => 'Full Leg & Bikini Botanical Waxing',
            'slug' => 'full-leg-bikini-botanical-waxing',
            'description' => 'Soothing honey-chamomile hard wax for painless, clean hair removal with post-wax soothing tea tree cooling emulsion.',
            'duration_minutes' => 60,
            'price' => 320000,
            'image' => 'img/waxing.png',
            'is_active' => true,
            'is_featured' => false,
        ]);

        SpaService::create([
            'service_category_id' => $waxingCat->id,
            'name' => 'Underarm & Arms Gentle Waxing',
            'slug' => 'underarm-arms-gentle-waxing',
            'description' => 'Fast, hygienic hair removal using hypoallergenic organic warm wax designed specifically for delicate and sensitive skin areas.',
            'duration_minutes' => 45,
            'price' => 220000,
            'image' => 'img/waxing.png',
            'is_active' => true,
            'is_featured' => false,
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
    }
}
