<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'The Menorah Beauty - Sanctuary of Healing & Luxury Relaxation' }}</title>
    <meta name="description" content="{{ $description ?? 'Katalog layanan spa mewah, massage tradisional, aromatherapy, dan body treatment di Seminyak, Bali.' }}">
    <link rel="canonical" href="{{  env('APP_URL') }}">

    <!-- Open Graph / Social Sharing Meta Tags -->
    <meta property="og:title" content="{{ $title ?? 'The Menorah Beauty - Sanctuary of Healing & Luxury Relaxation' }}">
    <meta property="og:description" content="{{ $description ?? 'Katalog layanan spa mewah, massage tradisional, aromatherapy, dan body treatment di Seminyak, Bali.' }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('img/spa-hero.png') }}">
    <meta property="og:url" content="{{  env('APP_URL') }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'The Menorah Beauty - Sanctuary of Healing & Luxury Relaxation' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Katalog layanan spa mewah, massage tradisional, aromatherapy, dan body treatment di Seminyak, Bali.' }}">
    <meta name="twitter:image" content="{{ $ogImage ?? asset('img/spa-hero.png') }}">

    <!-- Schema.org JSON-LD Structured Data -->
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@type' => 'HealthAndBeautyBusiness',
            'name' => 'The Menorah Beauty',
            'image' => asset('img/logo-brand.png'),
            '@id' => url('/'),
            'url' => url('/'),
            'telephone' => (isset($settings) && is_iterable($settings) && isset($settings['contact_phone'])) ? $settings['contact_phone'] : '+6281234567890',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => (isset($settings) && is_iterable($settings) && isset($settings['contact_address'])) ? $settings['contact_address'] : 'Seminyak',
                'addressLocality' => 'Bali',
                'postalCode' => '80361',
                'addressCountry' => 'ID',
            ],
            'priceRange' => '$$',
        ];
    @endphp
    <script type="application/ld+json">
        {!! json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>

    <link rel="icon" type="image/png" href="/icon/favicon-96x96.png?v=20260911" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/icon/favicon.svg?v=20260911" />
    <link rel="shortcut icon" href="/icon/favicon.ico?v=20260911" />
    <link rel="apple-touch-icon" sizes="180x180" href="/icon/apple-touch-icon.png?v=20260911" />
    <link rel="manifest" href="/icon/site.webmanifest?v=20260911" />

    <!-- Warna tema tab (Chrome, Edge, dll) -->
    <meta name="theme-color" content="#D96B58">
    
    <!-- Warna tab di Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Native Vite Assets (Tailwind CSS v4 + Alpine.js) -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <link href="{{ asset('build/assets/app-DI4g-xx3.css') }}" rel="stylesheet">
    <script src="{{ asset('build/assets/app-DO2nEFzp.js') }}"></script>
</head>
<body class="min-h-screen bg-[#FAF6F0] text-stone-900 dark:bg-[#121214] dark:text-stone-100 transition-colors duration-500 font-sans antialiased">
    <!-- Navbar Component -->
    <x-frond.navbar />

    <!-- Main Page Content -->
    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <!-- Footer Component -->
    <x-frond.footer />

    <!-- Button To Top Component -->
    <x-frond.buttonToTop />
</body>
</html>