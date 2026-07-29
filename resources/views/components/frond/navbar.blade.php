@php
    $isHome = request()->routeIs('welcome');
    $isAbout = request()->routeIs('about');
    $isContact = request()->routeIs('contact');
@endphp

<nav x-data="{ 
        scrolled: false, 
        mobileMenu: false, 
        darkMode: localStorage.getItem('darkMode') === 'true',
        toggleDark() {
            this.darkMode = !this.darkMode;
            localStorage.setItem('darkMode', this.darkMode);
            if (this.darkMode) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        },
        init() {
            if (this.darkMode) {
                document.documentElement.classList.add('dark');
            }
        }
     }" 
     @scroll.window="scrolled = (window.pageYOffset > 50)"
     :class="scrolled 
        ? 'top-4 w-[95%] max-w-6xl rounded-3xl border border-white/20 bg-white/70 dark:bg-black/60 backdrop-blur-xl shadow-2xl dark:shadow-amber-500/10' 
        : 'top-0 w-full rounded-none border-b border-transparent bg-transparent'"
     class="fixed left-1/2 -translate-x-1/2 z-[100] transition-all duration-700 ease-[cubic-bezier(0.23,1,0.32,1)] overflow-visible">
  
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 md:h-20 transition-all duration-500" :class="scrolled ? 'h-16' : 'h-20'">

      <!-- Logo Section (Left) -->
      <div class="flex-shrink-0 flex items-center z-10">
        <a href="{{ route('welcome') }}" class="flex items-center space-x-3 group">
          <div class="relative w-10 h-10 flex items-center justify-center">
            <div class="absolute inset-0 bg-amber-500 rounded-xl rotate-6 group-hover:rotate-12 transition-transform duration-500 opacity-20"></div>
            <div class="w-9 h-9 bg-gradient-to-tr from-amber-500 to-rose-400 rounded-xl flex items-center justify-center shadow-lg transform transition-all duration-500 group-hover:scale-110">
              <span class="text-white font-black text-xl italic font-serif">M</span>
            </div>
          </div>
          <span class="text-xl font-black tracking-tight dark:text-white text-gray-900 transition-colors duration-300 font-serif">
            The Manorah <span class="text-amber-500 font-sans text-sm font-semibold tracking-wider">SPA</span>
          </span>
        </a>
      </div>

      <!-- Desktop Navigation (Center) -->
      <div class="hidden md:flex absolute left-1/2 -translate-x-1/2 items-center bg-gray-200/50 dark:bg-white/10 backdrop-blur-md px-3 py-1.5 rounded-full border border-white/20 shadow-inner"
            :class="scrolled ? 'opacity-100 translate-y-0 scale-100' : 'md:bg-transparent md:border-transparent md:shadow-none'">
        <div class="flex items-center space-x-1">
            <!-- Home -->
            <a href="{{ route('welcome') }}"
               class="px-5 py-2 text-sm rounded-full transition-all duration-300 {{ $isHome ? 'bg-amber-500 text-white font-bold shadow-md shadow-amber-500/20' : 'font-semibold hover:text-amber-500 dark:hover:text-amber-300' }}"
               @if(!$isHome)
                   :class="scrolled ? 'dark:text-gray-300 text-gray-700 hover:bg-white/50 dark:hover:bg-white/10' : 'text-gray-800 dark:text-gray-200'"
               @endif>
               Home
            </a>

            <!-- Tentang Kami -->
            <a href="{{ route('about') }}"
               class="px-5 py-2 text-sm rounded-full transition-all duration-300 {{ $isAbout ? 'bg-amber-500 text-white font-bold shadow-md shadow-amber-500/20' : 'font-semibold hover:text-amber-500 dark:hover:text-amber-300' }}"
               @if(!$isAbout)
                   :class="scrolled ? 'dark:text-gray-300 text-gray-700 hover:bg-white/50 dark:hover:bg-white/10' : 'text-gray-800 dark:text-gray-200'"
               @endif>
               Tentang Kami
            </a>

            <!-- Layanan & Harga -->
            <a href="{{ route('welcome') }}#services"
               class="px-5 py-2 text-sm font-semibold rounded-full transition-all duration-300 hover:text-amber-500 dark:hover:text-amber-300"
               :class="scrolled ? 'dark:text-gray-300 text-gray-700 hover:bg-white/50 dark:hover:bg-white/10' : 'text-gray-800 dark:text-gray-200'">
               Layanan & Harga
            </a>

            <!-- Kontak -->
            <a href="{{ route('contact') }}"
               class="px-5 py-2 text-sm rounded-full transition-all duration-300 {{ $isContact ? 'bg-amber-500 text-white font-bold shadow-md shadow-amber-500/20' : 'font-semibold hover:text-amber-500 dark:hover:text-amber-300' }}"
               @if(!$isContact)
                   :class="scrolled ? 'dark:text-gray-300 text-gray-700 hover:bg-white/50 dark:hover:bg-white/10' : 'text-gray-800 dark:text-gray-200'"
               @endif>
               Kontak
            </a>
        </div>
      </div>

      <!-- Actions Section (Right) -->
      <div class="flex items-center space-x-4 z-10">
        <!-- Dark Mode Toggle -->
        <button @click="toggleDark()" 
                class="relative p-2 rounded-full text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-all duration-300 focus:outline-none group overflow-hidden border border-transparent hover:border-gray-200 dark:hover:border-gray-700"
                aria-label="Toggle Dark Mode">
          <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-500" :class="darkMode ? 'rotate-180' : 'rotate-0'">
            <svg x-show="!darkMode" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M16.243 16.243l.707.707M7.757 7.757l.707.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
            </svg>
            <svg x-show="darkMode" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
            </svg>
          </div>
        </button>

        <!-- WhatsApp Contact Button -->
        <a href="https://wa.me/6281234567890?text=Halo%20The%20Manorah%20Spa,%20saya%20ingin%20reservasi%20layanan%20home%20service%20spa." target="_blank" class="hidden lg:flex items-center space-x-2 px-6 py-2.5 bg-[#25D366] hover:bg-[#20ba56] text-white rounded-full text-sm font-bold shadow-lg shadow-green-500/20 transition-all duration-300 hover:scale-105 active:scale-95">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.246 2.248 3.484 5.232 3.484 8.412-.003 6.557-5.338 11.892-11.893 11.892-1.942-.001-3.841-.48-5.538-1.391l-6.459 1.699zm6.335-3.532c1.546.916 3.463 1.4 5.473 1.402 5.512 0 10.005-4.493 10.008-10.007.001-2.672-1.041-5.183-2.935-7.078-1.892-1.894-4.403-2.933-7.075-2.933-5.515 0-10.01 4.495-10.013 10.01-.001 1.917.5 3.775 1.447 5.389l-1.085 3.963 4.18-1.1zm11.312-7.105c-.31-.156-1.834-.905-2.112-1.006-.277-.101-.48-.151-.68.151-.2.302-.777.981-.952 1.182-.176.201-.351.227-.662.071-.31-.156-1.31-.483-2.496-1.541-.923-.824-1.545-1.841-1.725-2.143-.18-.302-.019-.465.136-.619.139-.138.31-.362.465-.544.155-.181.206-.31.31-.517.103-.207.051-.387-.026-.543-.077-.156-.68-1.638-.932-2.242-.245-.588-.493-.509-.68-.518-.176-.009-.377-.01-.578-.01-.201 0-.529.076-.806.377-.277.302-1.058 1.032-1.058 2.515 0 1.483 1.079 2.914 1.229 3.116.15.201 2.125 3.245 5.148 4.553.719.311 1.28.497 1.717.636.722.227 1.378.195 1.898.117.58-.087 1.834-.75 2.091-1.474.258-.724.258-1.344.181-1.474-.077-.13-.284-.207-.593-.364z"/>
          </svg>
          <span>Reservasi WA</span>
        </a>

        <!-- Mobile menu button -->
        <button @click="mobileMenu = !mobileMenu" 
                class="md:hidden p-2 rounded-xl text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors duration-200">
          <svg class="h-6 w-6 transform transition-transform duration-300" :class="mobileMenu ? 'rotate-90' : ''" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path x-show="!mobileMenu" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path x-show="mobileMenu" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div x-show="mobileMenu" 
        x-cloak
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 scale-95"
        class="md:hidden absolute top-full left-0 right-0 mt-4 px-4 pointer-events-none"
        @click.away="mobileMenu = false">
    <div class="bg-white/95 dark:bg-gray-900/95 backdrop-blur-2xl rounded-3xl border border-white/20 shadow-2xl p-4 space-y-2 pointer-events-auto overflow-hidden">
      <a href="{{ route('welcome') }}" @click="mobileMenu = false" class="flex items-center px-6 py-4 rounded-2xl text-base font-bold transition-all duration-300 {{ $isHome ? 'bg-amber-500 text-white' : 'text-gray-800 dark:text-gray-100 hover:bg-amber-500 hover:text-white' }}">Home</a>
      <a href="{{ route('about') }}" @click="mobileMenu = false" class="flex items-center px-6 py-4 rounded-2xl text-base font-bold transition-all duration-300 {{ $isAbout ? 'bg-amber-500 text-white' : 'text-gray-800 dark:text-gray-100 hover:bg-amber-500 hover:text-white' }}">Tentang Kami</a>
      <a href="{{ route('welcome') }}#services" @click="mobileMenu = false" class="flex items-center px-6 py-4 rounded-2xl text-base font-bold text-gray-800 dark:text-gray-100 hover:bg-amber-500 hover:text-white transition-all duration-300">Layanan & Harga</a>
      <a href="{{ route('contact') }}" @click="mobileMenu = false" class="flex items-center px-6 py-4 rounded-2xl text-base font-bold transition-all duration-300 {{ $isContact ? 'bg-amber-500 text-white' : 'text-gray-800 dark:text-gray-100 hover:bg-amber-500 hover:text-white' }}">Kontak</a>
      <div class="pt-4 px-2">
        <a href="https://wa.me/6281234567890?text=Halo%20The%20Manorah%20Spa,%20saya%20ingin%20reservasi%20layanan%20home%20service%20spa." target="_blank" class="flex items-center justify-center space-x-3 w-full bg-[#25D366] text-white py-4 rounded-2xl font-black shadow-xl shadow-green-500/20 transition-all duration-300 active:scale-95">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.246 2.248 3.484 5.232 3.484 8.412-.003 6.557-5.338 11.892-11.893 11.892-1.942-.001-3.841-.48-5.538-1.391l-6.459 1.699zm6.335-3.532c1.546.916 3.463 1.4 5.473 1.402 5.512 0 10.005-4.493 10.008-10.007.001-2.672-1.041-5.183-2.935-7.078-1.892-1.894-4.403-2.933-7.075-2.933-5.515 0-10.01 4.495-10.013 10.01-.001 1.917.5 3.775 1.447 5.389l-1.085 3.963 4.18-1.1zm11.312-7.105c-.31-.156-1.834-.905-2.112-1.006-.277-.101-.48-.151-.68.151-.2.302-.777.981-.952 1.182-.176.201-.351.227-.662.071-.31-.156-1.31-.483-2.496-1.541-.923-.824-1.545-1.841-1.725-2.143-.18-.302-.019-.465.136-.619.139-.138.31-.362.465-.544.155-.181.206-.31.31-.517.103-.207.051-.387-.026-.543-.077-.156-.68-1.638-.932-2.242-.245-.588-.493-.509-.68-.518-.176-.009-.377-.01-.578-.01-.201 0-.529.076-.806.377-.277.302-1.058 1.032-1.058 2.515 0 1.483 1.079 2.914 1.229 3.116.15.201 2.125 3.245 5.148 4.553.719.311 1.28.497 1.717.636.722.227 1.378.195 1.898.117.58-.087 1.834-.75 2.091-1.474.258-.724.258-1.344.181-1.474-.077-.13-.284-.207-.593-.364z"/>
          </svg>
          <span>Reservasi Via WhatsApp</span>
        </a>
      </div>
    </div>
  </div>
</nav>
