<x-layouts.app title="Kontak & Lokasi - The Manorah Spa">
    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-16 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-amber-500/10 via-rose-500/5 to-transparent dark:from-amber-950/20 dark:to-stone-950 -z-10"></div>
        <div class="absolute top-1/4 left-10 w-96 h-96 bg-amber-400/20 rounded-full blur-[120px] -z-10"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-4">
                <div class="inline-flex items-center space-x-2 px-4 py-2 rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-400 text-xs font-bold tracking-widest uppercase border border-amber-500/20">
                    <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                    <span>Informasi Kontak & Lokasi Service Hub</span>
                </div>

                <h1 class="text-4xl sm:text-5xl font-black font-serif text-stone-900 dark:text-white leading-tight">
                    Hubungi Tim <br>
                    <span class="bg-gradient-to-r from-amber-600 via-amber-400 to-amber-600 bg-clip-text text-transparent">
                        The Manorah Spa
                    </span>
                </h1>

                <p class="text-stone-600 dark:text-stone-300 text-base sm:text-lg leading-relaxed font-medium">
                    Kami siap melayani pertanyaan, konsultasi perawatan, dan reservasi spa panggilan ke rumah / villa Anda secara cepat dan ramah melalui WhatsApp.
                </p>

                <!-- Direct WhatsApp Big Banner CTA -->
                <div class="pt-4 flex justify-center">
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['whatsapp_number'] ?? '6281234567890') }}?text=Halo%20The%20Manorah%20Spa,%20saya%20ingin%20reservasi%20layanan%20spa%20panggilan."
                       target="_blank"
                       class="px-8 py-4 bg-[#25D366] hover:bg-[#20ba56] text-white rounded-full font-bold shadow-xl shadow-green-500/20 flex items-center space-x-3 transition-all duration-300 hover:scale-105 active:scale-95 text-base">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.246 2.248 3.484 5.232 3.484 8.412-.003 6.557-5.338 11.892-11.893 11.892-1.942-.001-3.841-.48-5.538-1.391l-6.459 1.699zm6.335-3.532c1.546.916 3.463 1.4 5.473 1.402 5.512 0 10.005-4.493 10.008-10.007.001-2.672-1.041-5.183-2.935-7.078-1.892-1.894-4.403-2.933-7.075-2.933-5.515 0-10.01 4.495-10.013 10.01-.001 1.917.5 3.775 1.447 5.389l-1.085 3.963 4.18-1.1zm11.312-7.105c-.31-.156-1.834-.905-2.112-1.006-.277-.101-.48-.151-.68.151-.2.302-.777.981-.952 1.182-.176.201-.351.227-.662.071-.31-.156-1.31-.483-2.496-1.541-.923-.824-1.545-1.841-1.725-2.143-.18-.302-.019-.465.136-.619.139-.138.31-.362.465-.544.155-.181.206-.31.31-.517.103-.207.051-.387-.026-.543-.077-.156-.68-1.638-.932-2.242-.245-.588-.493-.509-.68-.518-.176-.009-.377-.01-.578-.01-.201 0-.529.076-.806.377-.277.302-1.058 1.032-1.058 2.515 0 1.483 1.079 2.914 1.229 3.116.15.201 2.125 3.245 5.148 4.553.719.311 1.28.497 1.717.636.722.227 1.378.195 1.898.117.58-.087 1.834-.75 2.091-1.474.258-.724.258-1.344.181-1.474-.077-.13-.284-.207-.593-.364z"/>
                        </svg>
                        <span>Chat WhatsApp Langsung</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT CARDS GRID -->
    <section class="py-8">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- WhatsApp & Telepon -->
                <div class="p-6 rounded-3xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-4 hover:border-amber-500/50 transition-all duration-300 shadow-lg">
                    <div class="w-12 h-12 rounded-2xl bg-[#25D366]/10 text-[#25D366] flex items-center justify-center font-bold text-2xl">
                        💬
                    </div>
                    <div>
                        <h3 class="text-lg font-bold font-serif text-stone-900 dark:text-white">WhatsApp Direct</h3>
                        <p class="text-xs text-stone-500 dark:text-stone-400">Respon cepat kurang dari 5 menit</p>
                    </div>
                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['whatsapp_number'] ?? '6281234567890') }}" target="_blank" class="text-sm font-bold text-amber-500 hover:underline block">
                        +{{ $settings['whatsapp_number'] ?? '62 812-3456-7890' }}
                    </a>
                </div>

                <!-- Alamat & Service Hub -->
                <div class="p-6 rounded-3xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-4 hover:border-amber-500/50 transition-all duration-300 shadow-lg">
                    <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-500 flex items-center justify-center font-bold text-2xl">
                        📍
                    </div>
                    <div>
                        <h3 class="text-lg font-bold font-serif text-stone-900 dark:text-white">Service Hub</h3>
                        <p class="text-xs text-stone-500 dark:text-stone-400">Kantor pusat layanan panggilan</p>
                    </div>
                    <p class="text-sm text-stone-600 dark:text-stone-300 font-medium">
                        {{ $settings['address'] ?? 'Jl. Sunset Road No. 88, Seminyak, Bali' }}
                    </p>
                </div>

                <!-- Jam Operasional -->
                <div class="p-6 rounded-3xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-4 hover:border-amber-500/50 transition-all duration-300 shadow-lg">
                    <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-500 flex items-center justify-center font-bold text-2xl">
                        🕒
                    </div>
                    <div>
                        <h3 class="text-lg font-bold font-serif text-stone-900 dark:text-white">Jam Operasional</h3>
                        <p class="text-xs text-stone-500 dark:text-stone-400">Melayani setiap hari</p>
                    </div>
                    <p class="text-sm text-stone-600 dark:text-stone-300 font-medium">
                        {{ $settings['opening_hours'] ?? 'Senin - Minggu: 09:00 - 22:00 WITA' }}
                    </p>
                </div>

                <!-- Email Resmi -->
                <div class="p-6 rounded-3xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-4 hover:border-amber-500/50 transition-all duration-300 shadow-lg">
                    <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-500 flex items-center justify-center font-bold text-2xl">
                        ✉️
                    </div>
                    <div>
                        <h3 class="text-lg font-bold font-serif text-stone-900 dark:text-white">Email Pertanyaan</h3>
                        <p class="text-xs text-stone-500 dark:text-stone-400">Untuk pertanyaan resmi / lisensi</p>
                    </div>
                    <a href="mailto:info@themanorahspa.com" class="text-sm font-bold text-amber-500 hover:underline block">
                        info@themanorahspa.com
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- GOOGLE MAPS SECTION -->
    <section class="py-16 bg-white dark:bg-stone-900/50 transition-colors duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 space-y-8">
            <div class="text-center max-w-2xl mx-auto space-y-3">
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-amber-500">Peta & Area Hub</span>
                <h2 class="text-3xl font-black font-serif text-stone-900 dark:text-white">
                    Lokasi Service Hub (Seminyak, Bali)
                </h2>
                <p class="text-sm text-stone-600 dark:text-stone-300 font-medium">
                    Kantor pusat operasional terapis kami siap melayani area Seminyak, Canggu, Kuta, Denpasar, Sanur, Ubud, Nusa Dua, dan sekitarnya.
                </p>
            </div>

            <!-- Embed Google Maps Container -->
            <div class="rounded-3xl overflow-hidden shadow-2xl border border-stone-200 dark:border-stone-800 h-96 relative">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.026402324905!2d115.16668747587884!3d-8.689506691358988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2472719c8d50f%3A0x6b306b32cb71a39f!2sSeminyak%2C%20Kuta%2C%20Badung%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1700000000000!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- FAQ SECTION (PERTANYAAN UMUM) -->
    <section class="py-20 bg-stone-50 dark:bg-stone-900">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 space-y-12">
            <div class="text-center max-w-2xl mx-auto space-y-3">
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-amber-500">Bantuan & Informasi</span>
                <h2 class="text-3xl sm:text-4xl font-black font-serif text-stone-900 dark:text-white">
                    Pertanyaan Yang Sering Diajukan (FAQ)
                </h2>
                <p class="text-sm text-stone-600 dark:text-stone-300 font-medium">
                    Temukan jawaban cepat seputar pemesanan spa panggilan ke rumah.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse ($faqs as $index => $faq)
                    <div class="p-6 rounded-3xl bg-white dark:bg-stone-800 border border-stone-200 dark:border-stone-700 space-y-3 shadow-md">
                        <div class="flex items-center space-x-3">
                            <span class="w-8 h-8 rounded-full bg-amber-500/10 text-amber-500 font-bold flex items-center justify-center text-sm shrink-0">
                                Q{{ $index + 1 }}
                            </span>
                            <h4 class="text-base font-bold font-serif text-stone-900 dark:text-white">{{ $faq->question }}</h4>
                        </div>
                        <p class="text-sm text-stone-600 dark:text-stone-300 leading-relaxed font-medium pl-11">
                            {{ $faq->answer }}
                        </p>
                    </div>
                @empty
                    <div class="col-span-2 text-center py-8 text-stone-500 dark:text-stone-400">
                        Belum ada pertanyaan FAQ yang ditambahkan.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- BOTTOM CTA BANNER -->
    <section class="py-16 bg-stone-900 text-white relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center space-y-6">
            <h2 class="text-3xl font-black font-serif">Siap Merasakan Relaksasi Spa Di Rumah?</h2>
            <p class="text-stone-300 max-w-xl mx-auto font-medium">Klik tombol WhatsApp di bawah ini untuk terhubung langsung dengan customer service kami.</p>
            <div class="flex justify-center">
                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $settings['whatsapp_number'] ?? '6281234567890') }}?text=Halo%20The%20Manorah%20Spa,%20saya%20ingin%20reservasi."
                   target="_blank"
                   class="px-8 py-4 bg-[#25D366] hover:bg-[#20ba56] text-white font-bold rounded-full shadow-xl flex items-center space-x-3 transition-all duration-300 hover:scale-105 active:scale-95">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.246 2.248 3.484 5.232 3.484 8.412-.003 6.557-5.338 11.892-11.893 11.892-1.942-.001-3.841-.48-5.538-1.391l-6.459 1.699zm6.335-3.532c1.546.916 3.463 1.4 5.473 1.402 5.512 0 10.005-4.493 10.008-10.007.001-2.672-1.041-5.183-2.935-7.078-1.892-1.894-4.403-2.933-7.075-2.933-5.515 0-10.01 4.495-10.013 10.01-.001 1.917.5 3.775 1.447 5.389l-1.085 3.963 4.18-1.1zm11.312-7.105c-.31-.156-1.834-.905-2.112-1.006-.277-.101-.48-.151-.68.151-.2.302-.777.981-.952 1.182-.176.201-.351.227-.662.071-.31-.156-1.31-.483-2.496-1.541-.923-.824-1.545-1.841-1.725-2.143-.18-.302-.019-.465.136-.619.139-.138.31-.362.465-.544.155-.181.206-.31.31-.517.103-.207.051-.387-.026-.543-.077-.156-.68-1.638-.932-2.242-.245-.588-.493-.509-.68-.518-.176-.009-.377-.01-.578-.01-.201 0-.529.076-.806.377-.277.302-1.058 1.032-1.058 2.515 0 1.483 1.079 2.914 1.229 3.116.15.201 2.125 3.245 5.148 4.553.719.311 1.28.497 1.717.636.722.227 1.378.195 1.898.117.58-.087 1.834-.75 2.091-1.474.258-.724.258-1.344.181-1.474-.077-.13-.284-.207-.593-.364z"/>
                    </svg>
                    <span>Hubungi Via WhatsApp</span>
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>
