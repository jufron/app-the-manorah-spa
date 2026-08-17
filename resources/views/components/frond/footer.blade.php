<footer class="relative pt-24 pb-12 overflow-hidden bg-[#faf8f5] dark:bg-[#141210] border-t border-amber-500/20 transition-colors duration-500">
    <!-- Background Decorative Elements -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-px bg-gradient-to-r from-transparent via-amber-500/40 dark:via-amber-500/30 to-transparent"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-amber-500/10 dark:bg-amber-500/5 rounded-full blur-[120px] -z-10 translate-x-1/2 translate-y-1/2"></div>

    <div class="max-w-7xl mx-auto px-6 relative">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-16 mb-20">
            
            <!-- Brand Section -->
            <div class="lg:col-span-4 space-y-8">
                <a href="{{ route('welcome') }}" class="flex items-center space-x-3 group">
                    <img src="{{ asset('img/logo.png') }}" alt="The Manorah Spa Logo" class="h-12 w-auto object-contain transition-transform duration-500 group-hover:scale-105" />
                </a>
                <p class="text-stone-600 dark:text-stone-400 leading-relaxed max-w-sm font-medium italic">
                    "Epitome of relaxation, brought directly to your sanctuary. Experience world-class wellness without leaving your home or villa."
                </p>
                <div class="flex space-x-4">
                    <a href="https://wa.me/6281234567890" target="_blank" class="w-10 h-10 rounded-xl glass flex items-center justify-center text-stone-500 dark:text-stone-400 hover:bg-amber-600 hover:text-white transition-all duration-300">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.246 2.248 3.484 5.232 3.484 8.412-.003 6.557-5.338 11.892-11.893 11.892-1.942-.001-3.841-.48-5.538-1.391l-6.459 1.699zm6.335-3.532c1.546.916 3.463 1.4 5.473 1.402 5.512 0 10.005-4.493 10.008-10.007.001-2.672-1.041-5.183-2.935-7.078-1.892-1.894-4.403-2.933-7.075-2.933-5.515 0-10.01 4.495-10.013 10.01-.001 1.917.5 3.775 1.447 5.389l-1.085 3.963 4.18-1.1zm11.312-7.105c-.31-.156-1.834-.905-2.112-1.006-.277-.101-.48-.151-.68.151-.2.302-.777.981-.952 1.182-.176.201-.351.227-.662.071-.31-.156-1.31-.483-2.496-1.541-.923-.824-1.545-1.841-1.725-2.143-.18-.302-.019-.465.136-.619.139-.138.31-.362.465-.544.155-.181.206-.31.31-.517.103-.207.051-.387-.026-.543-.077-.156-.68-1.638-.932-2.242-.245-.588-.493-.509-.68-.518-.176-.009-.377-.01-.578-.01-.201 0-.529.076-.806.377-.277.302-1.058 1.032-1.058 2.515 0 1.483 1.079 2.914 1.229 3.116.15.201 2.125 3.245 5.148 4.553.719.311 1.28.497 1.717.636.722.227 1.378.195 1.898.117.58-.087 1.834-.75 2.091-1.474.258-.724.258-1.344.181-1.474-.077-.13-.284-.207-.593-.364z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Navigation -->
            <div class="lg:col-span-2 space-y-8">
                <h4 class="text-sm font-black uppercase tracking-[0.2em] text-amber-600 dark:text-amber-400 font-serif">Explore</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('welcome') }}" class="text-stone-600 dark:text-stone-400 hover:text-amber-600 dark:hover:text-amber-400 transition-colors font-medium">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-stone-600 dark:text-stone-400 hover:text-amber-600 dark:hover:text-amber-400 transition-colors font-medium">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="text-stone-600 dark:text-stone-400 hover:text-amber-600 dark:hover:text-amber-400 transition-colors font-medium">Services & Pricing</a></li>
                    <li><a href="{{ route('contact') }}" class="text-stone-600 dark:text-stone-400 hover:text-amber-600 dark:hover:text-amber-400 transition-colors font-medium">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="lg:col-span-3 space-y-8">
                <h4 class="text-sm font-black uppercase tracking-[0.2em] text-amber-600 dark:text-amber-400 font-serif">Treatments</h4>
                <ul class="space-y-4">
                    <li><a href="{{ route('services') }}" class="text-stone-600 dark:text-stone-400 hover:text-amber-600 dark:hover:text-amber-400 transition-colors font-medium">Massage & Body Therapy</a></li>
                    <li><a href="{{ route('services') }}" class="text-stone-600 dark:text-stone-400 hover:text-amber-600 dark:hover:text-amber-400 transition-colors font-medium">Facial & Skincare</a></li>
                    <li><a href="{{ route('services') }}" class="text-stone-600 dark:text-stone-400 hover:text-amber-600 dark:hover:text-amber-400 transition-colors font-medium">Body Scrub & Spa Package</a></li>
                    <li><a href="{{ route('services') }}" class="text-stone-600 dark:text-stone-400 hover:text-amber-600 dark:hover:text-amber-400 transition-colors font-medium">Nail Art & Eyelash Extensions</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="lg:col-span-3 space-y-8">
                <h4 class="text-sm font-black uppercase tracking-[0.2em] text-amber-600 dark:text-amber-400 font-serif">Contact Hub</h4>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-xl glass flex items-center justify-center text-amber-600 dark:text-amber-400 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        </div>
                        <p class="text-stone-600 dark:text-stone-400 font-medium">+62 812 3456 7890</p>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-xl glass flex items-center justify-center text-amber-600 dark:text-amber-400 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <p class="text-stone-600 dark:text-stone-400 font-medium">Jl. Sunset Road No. 88, Seminyak, Bali</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="pt-12 border-t border-amber-500/10 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-xs text-stone-500 dark:text-stone-400 font-bold uppercase tracking-widest">
                &copy; {{ date('Y') }} The Manorah Spa & Wellness. All rights reserved.
            </p>
            <div class="flex items-center space-x-2 text-xs text-stone-500 dark:text-stone-400 font-bold uppercase tracking-widest">
                <span>Sanctuary of Healing & Luxury Relaxation</span>
            </div>
        </div>
    </div>
</footer>