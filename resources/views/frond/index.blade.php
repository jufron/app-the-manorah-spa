<x-layouts.app>
    <!-- Hero Section -->
    <section id="home" class="min-h-screen flex items-center justify-center relative overflow-hidden transition-colors duration-500 lg:pt-20 pt-4">
      <!-- Background Image with Overlay -->
      <div class="absolute inset-0 z-0">
        <img src="{{ asset('img/spa-hero.png') }}" alt="Premium Spa" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-white/30 via-[#faf8f5]/60 to-[#faf8f5] dark:from-black/70 dark:via-[#12100e]/85 dark:to-[#12100e] backdrop-blur-[2px]"></div>
      </div>

      <!-- Animated Floating Elements -->
      <div class="absolute top-1/4 left-1/10 w-64 h-64 bg-amber-400/20 dark:bg-amber-700/15 rounded-full filter blur-3xl opacity-40 animate-blob"></div>
      <div class="absolute bottom-1/4 right-1/10 w-72 h-72 bg-amber-600/20 dark:bg-amber-600/10 rounded-full filter blur-3xl opacity-40 animate-blob animation-delay-2000"></div>

      <div class="text-center px-4 relative z-10 max-w-5xl mx-auto">
        <div class="inline-flex items-center space-x-2 px-4 py-2 mb-8 text-xs font-bold tracking-[0.2em] uppercase text-amber-700 dark:text-amber-400 bg-amber-500/10 backdrop-blur-md rounded-full border border-amber-500/20 shadow-sm">
          <span>Home & Villa Service Bali</span>
        </div>
        
        <h1 class="text-5xl md:text-8xl font-black text-stone-900 dark:text-white mb-8 leading-[0.95] tracking-tight font-serif">
          The <br/>
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-600 via-amber-500 to-amber-700 animate-gradient-x">Manorah Spa</span>
        </h1>
        
        <p class="text-lg md:text-2xl text-stone-700 dark:text-stone-300 max-w-2xl mx-auto mb-12 font-medium leading-relaxed italic">
          Sanctuary of healing and luxury relaxation brought directly to your home or villa
        </p>
        
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
          <a href="{{ route('services') }}" class="group relative px-10 py-4 bg-amber-600 text-white font-bold rounded-full shadow-[0_15px_35px_rgba(184,138,62,0.35)] hover:shadow-[0_20px_45px_rgba(184,138,62,0.5)] transition-all duration-500 hover:-translate-y-1 overflow-hidden">
            <span class="relative z-10">Book an Experience</span>
            <div class="absolute inset-0 bg-gradient-to-r from-amber-700 to-amber-500 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
          </a>
          <a href="{{ route('services') }}" class="px-10 py-4 bg-white/60 dark:bg-stone-800/60 text-stone-900 dark:text-white font-bold rounded-full backdrop-blur-xl border border-stone-300/40 dark:border-stone-700/40 hover:bg-white dark:hover:bg-stone-800 transition-all duration-500 shadow-lg">
            View Rituals
          </a>
        </div>
      </div>

    </section>

    <!-- about -->
    <section id="about" class="py-32 bg-[#faf8f5] dark:bg-[#141210] transition-colors duration-500 relative overflow-hidden">
      <!-- Background Decorative Elements -->
      <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-amber-500/10 dark:bg-amber-500/5 rounded-full blur-[120px] -z-10 translate-x-1/2 -translate-y-1/4"></div>
      <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-amber-600/10 dark:bg-amber-600/5 rounded-full blur-[100px] -z-10 -translate-x-1/4 translate-y-1/4"></div>

      <div class="max-w-7xl mx-auto px-6 relative">
        <div class="text-center max-w-3xl mx-auto mb-20">
          <span class="text-xs font-bold tracking-[0.3em] uppercase text-amber-600 dark:text-amber-400 mb-4 block">Experience Excellence</span>
          <h2 class="text-4xl md:text-6xl font-black text-stone-900 dark:text-white mb-6 font-serif leading-tight">
            Premium Wellness, <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-600 to-amber-400 italic font-normal">Delivered to You</span>
          </h2>
          <p class="text-lg text-stone-600 dark:text-stone-300 font-medium">
            Transform your residence into a sanctuary of tranquility. Our bespoke home service brings the world's most luxurious spa rituals and beauty treatments directly to your doorstep.
          </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
          <!-- Left Content -->
          <div class="lg:col-span-7 relative group">
            <!-- Main Image Card -->
            <div class="relative z-10 overflow-hidden rounded-[48px] shadow-2xl border border-stone-200/80 dark:border-stone-800/80 aspect-[4/3] lg:aspect-auto">
              <img src="{{ asset('img/home-service.png') }}" alt="Home Service Spa" class="w-full h-full object-cover transform transition-transform duration-1000 group-hover:scale-105">
              <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
            </div>

            <!-- Floating Glass Card -->
            <div class="absolute -bottom-10 -right-6 md:right-12 z-20 w-64 md:w-80 p-6 glass rounded-3xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] border border-amber-500/20">
              <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-12 rounded-2xl bg-amber-500/20 flex items-center justify-center text-amber-600 dark:text-amber-400">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                </div>
                <div>
                  <h4 class="font-bold text-stone-900 dark:text-white">Home Rituals</h4>
                  <p class="text-xs text-amber-600 dark:text-amber-400 uppercase tracking-widest font-semibold">Seminyak & Beyond</p>
                </div>
              </div>
              <p class="text-sm text-stone-600 dark:text-stone-300 leading-relaxed font-medium">
                Professional therapists equipped with organic essential oils brought to your private sanctuary.
              </p>
            </div>

            <!-- Secondary Decorative Image -->
            <div class="absolute -top-12 -left-8 hidden md:block w-48 h-64 z-0 overflow-hidden rounded-[32px] shadow-xl border border-stone-200/50 dark:border-stone-800/50 rotate-[-6deg]">
                <img src="{{ asset('img/beauty-products.png') }}" alt="Beauty Products" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-amber-500/10 mix-blend-overlay"></div>
            </div>
          </div>

          <!-- Right Content: Key Benefits -->
          <div class="lg:col-span-5 space-y-10">
            <div class="space-y-6">
              <div class="group flex items-start space-x-6 p-6 rounded-3xl transition-all duration-500 hover:bg-amber-500/10 border border-transparent hover:border-amber-500/20">
                <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-white dark:bg-stone-800 flex items-center justify-center shadow-lg border border-amber-500/20 group-hover:scale-110 transition-transform duration-500">
                  <span class="text-2xl">✨</span>
                </div>
                <div>
                  <h3 class="text-xl font-bold text-stone-900 dark:text-white mb-2 font-serif">Seamless Sanctuary</h3>
                  <p class="text-stone-600 dark:text-stone-400 leading-relaxed">No traffic, no stress. We bring the full spa experience to your living space, curated just for you.</p>
                </div>
              </div>

              <div class="group flex items-start space-x-6 p-6 rounded-3xl transition-all duration-500 hover:bg-amber-500/10 border border-transparent hover:border-amber-500/20">
                <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-white dark:bg-stone-800 flex items-center justify-center shadow-lg border border-amber-500/20 group-hover:scale-110 transition-transform duration-500">
                  <span class="text-2xl">🌿</span>
                </div>
                <div>
                  <h3 class="text-xl font-bold text-stone-900 dark:text-white mb-2 font-serif">Artisanal Products</h3>
                  <p class="text-stone-600 dark:text-stone-400 leading-relaxed">We use only premium, organic, and ethically sourced botanical extracts for every treatment.</p>
                </div>
              </div>

              <div class="group flex items-start space-x-6 p-6 rounded-3xl transition-all duration-500 hover:bg-amber-500/10 border border-transparent hover:border-amber-500/20">
                <div class="flex-shrink-0 w-14 h-14 rounded-2xl bg-white dark:bg-stone-800 flex items-center justify-center shadow-lg border border-amber-500/20 group-hover:scale-110 transition-transform duration-500">
                  <span class="text-2xl">🧖‍♀️</span>
                </div>
                <div>
                  <h3 class="text-xl font-bold text-stone-900 dark:text-white mb-2 font-serif">Expert Therapists</h3>
                  <p class="text-stone-600 dark:text-stone-400 leading-relaxed">Our masters of healing are highly trained in both traditional and modern holistic techniques.</p>
                </div>
              </div>
            </div>

            <div class="pt-4">
              <a href="{{ route('services') }}" class="inline-block px-10 py-4 bg-stone-900 hover:bg-amber-600 dark:bg-amber-600 dark:hover:bg-amber-700 text-white font-bold rounded-2xl hover:scale-105 transition-all duration-300 shadow-xl">
                Explore Home Services
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SERVICES & CATEGORIES SECTION (#services) -->
    <section id="services" class="py-28 relative overflow-hidden bg-stone-100/60 dark:bg-[#12100e] transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-20">
                <span class="inline-block text-xs font-bold uppercase tracking-[0.25em] text-amber-600 dark:text-amber-400 bg-amber-500/10 px-4 py-1.5 rounded-full border border-amber-500/20">
                    Treatment Categories
                </span>
                <h2 class="text-4xl sm:text-5xl font-black font-serif tracking-tight text-stone-900 dark:text-white leading-tight">
                    Our Wellness Categories
                </h2>
                <p class="text-base sm:text-lg text-stone-600 dark:text-stone-300 leading-relaxed font-medium italic">
                    Explore our specialized spa treatment categories. Click any category to view all available rituals and personalized packages.
                </p>
            </div>

            <!-- Service Category Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($categories as $cat)
                    <div class="group rounded-3xl bg-white dark:bg-[#1c1815] border border-stone-200/80 dark:border-stone-800/80 overflow-hidden shadow-lg hover:shadow-2xl hover:border-amber-500/50 transition-all duration-500 flex flex-col justify-between hover:-translate-y-1">
                        <div>
                            <!-- Category Image Header -->
                            <div class="h-60 bg-gradient-to-tr from-stone-900 via-amber-950 to-stone-800 relative overflow-hidden flex items-center justify-center p-6 text-white">
                                @if ($cat->image)
                                    <img src="{{ asset(str_starts_with($cat->image, 'http') || str_starts_with($cat->image, 'img/') ? $cat->image : 'storage/' . $cat->image) }}"
                                         alt="{{ $cat->name }}"
                                         class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                                @else
                                    <div class="absolute inset-0 bg-gradient-to-tr from-amber-600/30 to-amber-900/30"></div>
                                @endif

                                <div class="absolute top-4 right-4 z-10">
                                    <span class="px-3.5 py-1.5 bg-amber-600/90 text-white rounded-full text-xs font-bold tracking-wider uppercase backdrop-blur-md shadow-lg">
                                        {{ $cat->spa_services_count ?? 0 }} Treatments
                                    </span>
                                </div>

                                <div class="absolute bottom-4 left-6 right-6 z-10">
                                    <h3 class="text-2xl font-bold font-serif text-white group-hover:text-amber-300 transition-colors duration-300 leading-tight">
                                        {{ $cat->name }}
                                    </h3>
                                </div>
                            </div>

                            <!-- Category Body Description -->
                            <div class="p-7 space-y-4">
                                <p class="text-sm text-stone-600 dark:text-stone-300 leading-relaxed line-clamp-3 font-normal">
                                    {{ $cat->description ?? 'Discover our bespoke collection of therapeutic treatments designed for total restoration and balance.' }}
                                </p>
                            </div>
                        </div>

                        <!-- Card Footer Action -->
                        <div class="p-7 pt-0">
                            <a href="{{ route('services.category', $cat->slug) }}"
                               class="w-full py-3.5 px-6 bg-stone-900 hover:bg-amber-600 dark:bg-stone-800 dark:hover:bg-amber-600 text-white font-bold rounded-2xl text-sm transition-all duration-300 flex items-center justify-center space-x-2 group-hover:shadow-lg shadow-amber-600/20">
                                <span>Explore Services</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="p-8 rounded-3xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 text-center col-span-full">
                        <p class="text-stone-500">No service categories available.</p>
                    </div>
                @endforelse
            </div>

            <!-- View All Treatments Banner -->
            <div class="mt-16 text-center">
                <a href="{{ route('services') }}"
                   class="inline-flex items-center space-x-3 px-8 py-4 bg-gradient-to-r from-amber-600 to-amber-700 text-white font-bold rounded-full shadow-xl shadow-amber-600/20 hover:scale-105 transition-all duration-300 active:scale-95">
                    <span>View All Treatments & Rituals</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- CONTACT & LOCATION SECTION (#contact) -->
    <section id="contact" class="py-24 bg-[#141210] text-white relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-6 space-y-6">
                    <span class="text-xs font-bold uppercase tracking-[0.2em] text-amber-400">Hubungi & Reservasi</span>
                    <h2 class="text-3xl sm:text-4xl font-black font-serif">
                        Jadwalkan Waktu Relaksasi Anda
                    </h2>
                    <p class="text-stone-300 leading-relaxed font-medium">
                        Hubungi kami melalui WhatsApp untuk reservasi langsung atau konsultasi paket spa yang paling pas untuk kebutuhan Anda.
                    </p>

                    <div class="space-y-4 pt-4">
                        <div class="flex items-center space-x-4 p-4 rounded-2xl bg-white/5 border border-white/10">
                            <div class="w-12 h-12 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center font-bold shrink-0">
                                📍
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-amber-400">Alamat Spa</h4>
                                <p class="text-sm text-stone-300">{{ $settings['address'] ?? 'Jl. Sunset Road No. 88, Seminyak, Bali' }}</p>
                            </div>
                        </div>

                        <div class="flex items-center space-x-4 p-4 rounded-2xl bg-white/5 border border-white/10">
                            <div class="w-12 h-12 rounded-xl bg-amber-500/20 text-amber-400 flex items-center justify-center font-bold shrink-0">
                                🕒
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-amber-400">Jam Operasional</h4>
                                <p class="text-sm text-stone-300">{{ $settings['opening_hours'] ?? 'Senin - Minggu: 09:00 - 22:00 WITA' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="p-8 rounded-3xl bg-gradient-to-tr from-stone-900 to-amber-950 border border-amber-500/20 text-center space-y-6 shadow-2xl">
                        <h3 class="text-2xl font-black font-serif">Reservasi Mudah & Cepat</h3>
                        <p class="text-sm text-stone-300">Respon cepat dari customer service kami dalam waktu kurang dari 5 menit.</p>
                        
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['whatsapp_number'] ?? '6281234567890') }}?text=Halo%20The%20Manorah%20Spa,%20saya%20ingin%20reservasi."
                           target="_blank"
                           class="inline-flex items-center justify-center space-x-3 w-full py-4 bg-[#25D366] hover:bg-[#20ba56] text-white font-bold rounded-2xl shadow-xl transition-all duration-300 hover:scale-105 active:scale-95">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.246 2.248 3.484 5.232 3.484 8.412-.003 6.557-5.338 11.892-11.893 11.892-1.942-.001-3.841-.48-5.538-1.391l-6.459 1.699zm6.335-3.532c1.546.916 3.463 1.4 5.473 1.402 5.512 0 10.005-4.493 10.008-10.007.001-2.672-1.041-5.183-2.935-7.078-1.892-1.894-4.403-2.933-7.075-2.933-5.515 0-10.01 4.495-10.013 10.01-.001 1.917.5 3.775 1.447 5.389l-1.085 3.963 4.18-1.1zm11.312-7.105c-.31-.156-1.834-.905-2.112-1.006-.277-.101-.48-.151-.68.151-.2.302-.777.981-.952 1.182-.176.201-.351.227-.662.071-.31-.156-1.31-.483-2.496-1.541-.923-.824-1.545-1.841-1.725-2.143-.18-.302-.019-.465.136-.619.139-.138.31-.362.465-.544.155-.181.206-.31.31-.517.103-.207.051-.387-.026-.543-.077-.156-.68-1.638-.932-2.242-.245-.588-.493-.509-.68-.518-.176-.009-.377-.01-.578-.01-.201 0-.529.076-.806.377-.277.302-1.058 1.032-1.058 2.515 0 1.483 1.079 2.914 1.229 3.116.15.201 2.125 3.245 5.148 4.553.719.311 1.28.497 1.717.636.722.227 1.378.195 1.898.117.58-.087 1.834-.75 2.091-1.474.258-.724.258-1.344.181-1.474-.077-.13-.284-.207-.593-.364z"/>
                            </svg>
                            <span>Chat WhatsApp Sekarang</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
