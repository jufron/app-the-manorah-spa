<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'The Manorah Spa & Wellness - Sanctuary of Healing & Luxury Relaxation' }}</title>
    <meta name="description" content="Katalog layanan spa mewah, massage tradisional, aromatherapy, dan body treatment di Seminyak, Bali.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Native Vite Assets (Tailwind CSS v4 + Alpine.js) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-stone-50 text-stone-900 dark:bg-stone-950 dark:text-stone-100 transition-colors duration-500 font-sans antialiased">
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