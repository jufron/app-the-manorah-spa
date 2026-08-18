<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'The Manorah Spa & Wellness - Sanctuary of Healing & Luxury Relaxation' }}</title>
    <meta name="description" content="Katalog layanan spa mewah, massage tradisional, aromatherapy, dan body treatment di Seminyak, Bali.">

    <link rel="icon" href="{{ asset('img/icon/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('img/icon/android-chrome-512x512.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/icon/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/icon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/icon/site.webmanifest') }}">

    <!-- Warna tema tab (Chrome, Edge, dll) -->
    <meta name="theme-color" content="#c69f59">
    
    <!-- Warna tab di Safari -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Native Vite Assets (Tailwind CSS v4 + Alpine.js) -->
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->

    <link href="{{ asset('build/assets/app-Bv2DHghc.css') }}" rel="stylesheet">
    <script src="{{ asset('build/assets/app-DO2nEFzp.js') }}"></script>
</head>
<body class="min-h-screen bg-[#faf8f5] text-stone-900 dark:bg-[#12100e] dark:text-stone-100 transition-colors duration-500 font-sans antialiased">
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