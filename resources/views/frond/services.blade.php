<x-layouts.app>
    <!-- PAGE HEADER HERO SECTION -->
    <section class="relative pt-32 pb-20 overflow-hidden bg-gradient-to-b from-amber-500/10 via-amber-500/5 to-transparent dark:from-[#1c1815] dark:to-[#12100e]">
        <!-- Background Orbs -->
        <div class="absolute top-1/4 left-10 w-72 h-72 bg-amber-400/20 rounded-full blur-[100px] -z-10"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-amber-600/10 rounded-full blur-[120px] -z-10"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center relative z-10">
            <span class="inline-block text-xs font-bold uppercase tracking-[0.25em] text-amber-600 dark:text-amber-400 bg-amber-500/10 px-4 py-1.5 rounded-full border border-amber-500/20 mb-6">
                {{ $selectedCategory ? $selectedCategory->name : 'Our Full Collection' }}
            </span>

            <h1 class="text-4xl md:text-6xl font-black font-serif text-stone-900 dark:text-white leading-tight mb-6">
                @if ($selectedCategory)
                    {{ $selectedCategory->name }}
                @else
                    Bespoke Treatment Rituals
                @endif
            </h1>

            <p class="text-lg md:text-xl text-stone-600 dark:text-stone-300 max-w-3xl mx-auto font-medium italic leading-relaxed">
                @if ($selectedCategory && $selectedCategory->description)
                    {{ $selectedCategory->description }}
                @else
                    Immerse yourself in our world-class therapies. Crafted with pure botanical extracts and delivered directly to your private space.
                @endif
            </p>

            <!-- Category Filter Tabs -->
            <div class="flex flex-wrap items-center justify-center gap-3 mt-12">
                <a href="{{ route('services') }}"
                   class="px-6 py-3 rounded-full text-sm font-bold transition-all duration-300 flex items-center space-x-2 {{ !$selectedCategory ? 'bg-amber-600 text-white shadow-lg shadow-amber-600/25 scale-105' : 'bg-white/80 dark:bg-stone-800/80 text-stone-700 dark:text-stone-300 hover:bg-stone-100 dark:hover:bg-stone-700 border border-stone-200 dark:border-stone-700' }}">
                    <span>All Treatments</span>
                </a>

                @foreach ($categories as $cat)
                    <a href="{{ route('services.category', $cat->slug) }}"
                       class="px-6 py-3 rounded-full text-sm font-bold transition-all duration-300 flex items-center space-x-2 {{ $selectedCategory && $selectedCategory->id === $cat->id ? 'bg-amber-600 text-white shadow-lg shadow-amber-600/25 scale-105' : 'bg-white/80 dark:bg-stone-800/80 text-stone-700 dark:text-stone-300 hover:bg-stone-100 dark:hover:bg-stone-700 border border-stone-200 dark:border-stone-700' }}">
                        <span>{{ $cat->name }}</span>
                        <span class="px-2 py-0.5 text-xs rounded-full {{ $selectedCategory && $selectedCategory->id === $cat->id ? 'bg-white/20 text-white' : 'bg-stone-200 dark:bg-stone-700 text-stone-600 dark:text-stone-300' }}">
                            {{ $cat->spa_services_count ?? 0 }}
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- SERVICES LIST GRID SECTION -->
    <section class="py-20 bg-stone-50/30 dark:bg-[#12100e] transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($services as $service)
                    <div class="group rounded-3xl bg-white dark:bg-[#1c1815] border border-stone-200/80 dark:border-stone-800/80 overflow-hidden shadow-lg hover:shadow-2xl hover:border-amber-500/50 transition-all duration-500 flex flex-col justify-between hover:-translate-y-1">
                        <div>
                            <!-- Service Thumbnail Header -->
                            <div class="h-56 bg-gradient-to-tr from-stone-900 via-amber-950 to-stone-800 relative overflow-hidden flex items-center justify-center p-6 text-white">
                                @if ($service->image)
                                    <img src="{{ asset(str_starts_with($service->image, 'http') || str_starts_with($service->image, 'img/') ? $service->image : 'storage/' . $service->image) }}" alt="{{ $service->name }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-black/40"></div>
                                @else
                                    <div class="absolute inset-0 bg-gradient-to-tr from-amber-600/30 to-amber-900/30"></div>
                                @endif
                                <div class="relative z-10 space-y-2 text-center">
                                    <span class="px-3.5 py-1 bg-amber-600/90 text-white rounded-full text-xs font-bold tracking-wider uppercase backdrop-blur-md shadow-md">
                                        {{ $service->category->name ?? 'Spa Ritual' }}
                                    </span>
                                </div>
                            </div>

                            <!-- Service Card Content -->
                            <div class="p-7 space-y-4">
                                <div class="flex items-start justify-between gap-3">
                                    <h3 class="text-xl font-bold font-serif text-stone-900 dark:text-white leading-snug group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors duration-300">
                                        {{ $service->name }}
                                    </h3>
                                    <span class="px-3 py-1 bg-stone-100 dark:bg-stone-800 text-stone-600 dark:text-stone-300 rounded-lg text-xs font-semibold whitespace-nowrap shrink-0">
                                        ⏱ {{ $service->duration_minutes }} Mins
                                    </span>
                                </div>

                                <p class="text-sm text-stone-600 dark:text-stone-400 leading-relaxed font-normal">
                                    {!! strip_tags($service->description) !!}
                                </p>
                            </div>
                        </div>

                        <!-- Card Footer Price & WhatsApp Action -->
                        <div class="p-7 pt-0 space-y-4">
                            <div class="pt-4 border-t border-stone-100 dark:border-stone-800/80 flex items-center justify-between">
                                <div>
                                    <span class="text-xs text-stone-400 uppercase tracking-wider block font-semibold">Pricing</span>
                                    <span class="text-xl font-black text-amber-600 dark:text-amber-400 font-serif">
                                        IDR {{ number_format($service->price, 0, ',', '.') }}
                                    </span>
                                </div>

                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['whatsapp_number'] ?? '6281234567890') }}?text=Halo%20The%20Manorah%20Spa,%20saya%20ingin%20booking%20layanan:%20{{ urlencode($service->name) }}"
                                   target="_blank"
                                   class="px-5 py-2.5 bg-[#25D366] hover:bg-[#20ba56] text-white rounded-full text-xs font-bold shadow-md flex items-center space-x-1.5 transition-all duration-300 hover:scale-105 active:scale-95">
                                    <span>Book via WA</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="p-12 rounded-3xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 text-center col-span-full space-y-4">
                        <p class="text-lg text-stone-600 dark:text-stone-400 font-medium">No treatments found in this category.</p>
                        <a href="{{ route('services') }}" class="inline-block px-6 py-2.5 bg-amber-600 text-white font-bold rounded-full text-sm">View All Treatments</a>
                    </div>
                @endforelse
            </div>

            <!-- Back to Homepage Link -->
            <div class="mt-16 text-center">
                <a href="{{ route('welcome') }}"
                   class="inline-flex items-center space-x-2 text-stone-600 dark:text-stone-400 hover:text-amber-500 dark:hover:text-amber-400 font-bold transition-colors duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    <span>Back to Home</span>
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>
