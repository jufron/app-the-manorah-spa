<x-layouts.app>
    <!-- HERO SECTION (#home) -->
    <section id="home" class="relative min-h-screen flex items-center pt-28 pb-16 overflow-hidden">
        <!-- Background Overlay & Gradients -->
        <div class="absolute inset-0 bg-gradient-to-b from-amber-500/10 via-rose-500/5 to-transparent dark:from-amber-950/20 dark:to-stone-950 -z-10"></div>
        <div class="absolute top-1/4 left-10 w-72 h-72 bg-amber-400/20 rounded-full blur-[100px] -z-10"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-rose-400/15 rounded-full blur-[120px] -z-10"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Left Content -->
                <div class="lg:col-span-7 space-y-8">
                    <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-400 text-xs font-bold tracking-widest uppercase border border-amber-500/20">
                        <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                        <span>{{ $settings['site_tagline'] ?? 'Sanctuary of Healing & Luxury Relaxation' }}</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black font-serif tracking-tight leading-none text-stone-900 dark:text-white">
                        Sentuhan Mewah <br>
                        <span class="bg-gradient-to-r from-amber-500 via-rose-400 to-amber-600 bg-clip-text text-transparent">
                            Relaksasi & Kesegaran Murni
                        </span>
                    </h1>

                    <p class="text-base sm:text-lg text-stone-600 dark:text-stone-300 max-w-2xl font-normal leading-relaxed">
                        Nikmati pengalaman terapi pijat tradisional, aromatherapy essential oil, dan ritual spa terbaik langsung dari terapis profesional bersertifikat.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap gap-4 pt-2">
                        <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['whatsapp_number'] ?? '6281234567890') }}?text=Halo%20The%20Manorah%20Spa,%20saya%20ingin%20reservasi%20layanan." target="_blank"
                           class="px-8 py-4 bg-[#25D366] hover:bg-[#20ba56] text-white rounded-full font-bold shadow-xl shadow-green-500/20 flex items-center space-x-3 transition-all duration-300 hover:scale-105 active:scale-95">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.246 2.248 3.484 5.232 3.484 8.412-.003 6.557-5.338 11.892-11.893 11.892-1.942-.001-3.841-.48-5.538-1.391l-6.459 1.699zm6.335-3.532c1.546.916 3.463 1.4 5.473 1.402 5.512 0 10.005-4.493 10.008-10.007.001-2.672-1.041-5.183-2.935-7.078-1.892-1.894-4.403-2.933-7.075-2.933-5.515 0-10.01 4.495-10.013 10.01-.001 1.917.5 3.775 1.447 5.389l-1.085 3.963 4.18-1.1zm11.312-7.105c-.31-.156-1.834-.905-2.112-1.006-.277-.101-.48-.151-.68.151-.2.302-.777.981-.952 1.182-.176.201-.351.227-.662.071-.31-.156-1.31-.483-2.496-1.541-.923-.824-1.545-1.841-1.725-2.143-.18-.302-.019-.465.136-.619.139-.138.31-.362.465-.544.155-.181.206-.31.31-.517.103-.207.051-.387-.026-.543-.077-.156-.68-1.638-.932-2.242-.245-.588-.493-.509-.68-.518-.176-.009-.377-.01-.578-.01-.201 0-.529.076-.806.377-.277.302-1.058 1.032-1.058 2.515 0 1.483 1.079 2.914 1.229 3.116.15.201 2.125 3.245 5.148 4.553.719.311 1.28.497 1.717.636.722.227 1.378.195 1.898.117.58-.087 1.834-.75 2.091-1.474.258-.724.258-1.344.181-1.474-.077-.13-.284-.207-.593-.364z"/>
                            </svg>
                            <span>Reservasi WhatsApp</span>
                        </a>
                        <a href="#services"
                           class="px-8 py-4 bg-stone-900 hover:bg-stone-800 dark:bg-stone-800 dark:hover:bg-stone-700 text-white rounded-full font-bold shadow-lg transition-all duration-300 hover:scale-105 active:scale-95 border border-white/10">
                            Lihat Paket & Harga
                        </a>
                    </div>

                    <!-- Quick Stats Badges -->
                    <div class="grid grid-cols-3 gap-6 pt-6 border-t border-stone-200 dark:border-stone-800 max-w-lg">
                        <div>
                            <p class="text-2xl font-black font-serif text-amber-500">100%</p>
                            <p class="text-xs font-medium text-stone-500 dark:text-stone-400 uppercase tracking-wider">Minyak Organik</p>
                        </div>
                        <div>
                            <p class="text-2xl font-black font-serif text-amber-500">4.9 ★</p>
                            <p class="text-xs font-medium text-stone-500 dark:text-stone-400 uppercase tracking-wider">Kepuasan Tamu</p>
                        </div>
                        <div>
                            <p class="text-2xl font-black font-serif text-amber-500">Home/Villa</p>
                            <p class="text-xs font-medium text-stone-500 dark:text-stone-400 uppercase tracking-wider">Layanan Antar</p>
                        </div>
                    </div>
                </div>

                <!-- Right Card Banner -->
                <div class="lg:col-span-5 relative">
                    <div class="relative mx-auto max-w-md rounded-3xl overflow-hidden shadow-2xl border border-white/20 bg-white/40 dark:bg-stone-900/60 backdrop-blur-xl p-6 space-y-6">
                        <div class="h-64 rounded-2xl bg-gradient-to-tr from-amber-500 to-rose-400 relative overflow-hidden flex items-center justify-center p-8 text-center text-white">
                            <div class="absolute inset-0 bg-black/20"></div>
                            <div class="relative z-10 space-y-2">
                                <span class="text-xs font-bold uppercase tracking-widest bg-white/20 px-3 py-1 rounded-full backdrop-blur-md">Signature Package</span>
                                <h3 class="text-2xl font-black font-serif">Swedish Massage & Rose Petal Bath</h3>
                                <p class="text-xs text-amber-100 italic">Pengalaman relaksasi holistik 120 Menit</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-3 rounded-xl bg-stone-100 dark:bg-stone-800/60">
                                <span class="text-sm font-semibold">Terapis Tersertifikasi</span>
                                <span class="text-xs text-amber-500 font-bold">Terverifikasi ✓</span>
                            </div>
                            <div class="flex items-center justify-between p-3 rounded-xl bg-stone-100 dark:bg-stone-800/60">
                                <span class="text-sm font-semibold">Jam Operasional</span>
                                <span class="text-xs text-stone-500 dark:text-stone-400">09.00 - 22.00 WITA</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ABOUT SECTION (#about) -->
    <section id="about" class="py-24 bg-white dark:bg-stone-900/50 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-amber-500">Tentang The Manorah Spa</span>
                <h2 class="text-3xl sm:text-4xl font-black font-serif text-stone-900 dark:text-white">
                    Perawatan Tubuh & Jiwa Kelas Dunia
                </h2>
                <p class="text-stone-600 dark:text-stone-300 leading-relaxed font-medium">
                    The Manorah Spa memadukan keahlian terapi pijat tradisional nusantara dengan teknik aromatherapy modern untuk mengembalikan vitalitas dan ketenangan pikiran Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-3xl bg-stone-50 dark:bg-stone-800/50 border border-stone-200 dark:border-stone-800 space-y-4 hover:border-amber-500/50 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-500 flex items-center justify-center font-bold text-xl">01</div>
                    <h3 class="text-xl font-bold font-serif">Aromatherapy Murni</h3>
                    <p class="text-sm text-stone-600 dark:text-stone-400 leading-relaxed">Menggunakan racikan essensial murni dari tumbuhan herbal alami tanpa bahan kimia berbahaya.</p>
                </div>

                <div class="p-8 rounded-3xl bg-stone-50 dark:bg-stone-800/50 border border-stone-200 dark:border-stone-800 space-y-4 hover:border-amber-500/50 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-500 flex items-center justify-center font-bold text-xl">02</div>
                    <h3 class="text-xl font-bold font-serif">Terapis Berpengalaman</h3>
                    <p class="text-sm text-stone-600 dark:text-stone-400 leading-relaxed">Terapis kami telah terlatih secara profesional dalam penanganan titik refleksi dan kebugaran tubuh.</p>
                </div>

                <div class="p-8 rounded-3xl bg-stone-50 dark:bg-stone-800/50 border border-stone-200 dark:border-stone-800 space-y-4 hover:border-amber-500/50 transition-all duration-300">
                    <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-500 flex items-center justify-center font-bold text-xl">03</div>
                    <h3 class="text-xl font-bold font-serif">Privasi & Kenyamanan</h3>
                    <p class="text-sm text-stone-600 dark:text-stone-400 leading-relaxed">Suasana relaksasi privat yang tenang, higienis, serta peralatan steril untuk setiap pelanggan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES CATALOG SECTION (#services) -->
    <section id="services" class="py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-amber-500">Katalog Layanan & Harga</span>
                <h2 class="text-3xl sm:text-4xl font-black font-serif text-stone-900 dark:text-white">
                    Pilihan Paket Perawatan Spa Khas
                </h2>
                <p class="text-stone-600 dark:text-stone-300 leading-relaxed">
                    Pilih paket perawatan yang sesuai dengan kebutuhan kesehatan dan relaksasi Anda.
                </p>
            </div>

            <!-- Service Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($services as $service)
                    <div class="group rounded-3xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 overflow-hidden shadow-lg hover:shadow-2xl hover:border-amber-500/50 transition-all duration-500 flex flex-col justify-between">
                        <div>
                            <!-- Thumbnail Header -->
                            <div class="h-48 bg-gradient-to-tr from-stone-800 to-amber-900 relative overflow-hidden flex items-center justify-center p-6 text-white">
                                @if ($service->image)
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-black/40"></div>
                                @endif
                                <div class="relative z-10 space-y-2 text-center">
                                    <span class="px-3 py-1 bg-amber-500/80 text-white rounded-full text-xs font-bold tracking-wider uppercase backdrop-blur-md">
                                        {{ $service->category->name ?? 'Spa Treatment' }}
                                    </span>
                                </div>
                            </div>

                            <!-- Card Body -->
                            <div class="p-6 space-y-4">
                                <div class="flex items-start justify-between gap-2">
                                    <h3 class="text-xl font-bold font-serif text-stone-900 dark:text-white leading-snug">
                                        {{ $service->name }}
                                    </h3>
                                    <span class="px-2.5 py-1 bg-stone-100 dark:bg-stone-800 text-stone-600 dark:text-stone-300 rounded-lg text-xs font-semibold whitespace-nowrap shrink-0">
                                        ⏱ {{ $service->duration_minutes }} Mnt
                                    </span>
                                </div>

                                <p class="text-sm text-stone-600 dark:text-stone-400 line-clamp-3 leading-relaxed">
                                    {!! strip_tags($service->description) !!}
                                </p>
                            </div>
                        </div>

                        <!-- Card Footer Price & Action -->
                        <div class="p-6 pt-0 space-y-4">
                            <div class="pt-4 border-t border-stone-100 dark:border-stone-800 flex items-center justify-between">
                                <div>
                                    <span class="text-xs text-stone-400 uppercase tracking-wider block">Harga Paket</span>
                                    <span class="text-xl font-black text-amber-500 font-serif">
                                        Rp {{ number_format($service->price, 0, ',', '.') }}
                                    </span>
                                </div>

                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['whatsapp_number'] ?? '6281234567890') }}?text=Halo%20The%20Manorah%20Spa,%20saya%20ingin%20booking%20layanan:%20{{ urlencode($service->name) }}"
                                   target="_blank"
                                   class="px-5 py-2.5 bg-[#25D366] hover:bg-[#20ba56] text-white rounded-full text-xs font-bold shadow-md flex items-center space-x-1.5 transition-all duration-300 hover:scale-105 active:scale-95">
                                    <span>Pesan WA</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Fallback Sample Card -->
                    <div class="p-8 rounded-3xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 text-center col-span-full">
                        <p class="text-stone-500">Belum ada layanan spa yang ditampilkan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- CONTACT & LOCATION SECTION (#contact) -->
    <section id="contact" class="py-24 bg-stone-900 text-white relative">
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
                    <div class="p-8 rounded-3xl bg-gradient-to-tr from-stone-800 to-amber-950 border border-white/10 text-center space-y-6 shadow-2xl">
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
