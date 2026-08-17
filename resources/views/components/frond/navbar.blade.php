@php
    $isHome = request()->routeIs('welcome');
    $isAbout = request()->routeIs('about');
    $isServices = request()->routeIs('services*');
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
        ? 'top-4 w-[95%] max-w-6xl rounded-3xl border border-amber-500/20 bg-white/85 dark:bg-[#1c1815]/85 backdrop-blur-xl shadow-2xl dark:shadow-amber-500/10' 
        : 'top-0 w-full rounded-none border-b border-transparent bg-transparent'"
     class="fixed left-1/2 -translate-x-1/2 z-[100] transition-all duration-700 ease-[cubic-bezier(0.23,1,0.32,1)] overflow-visible">
  
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 md:h-20 transition-all duration-500" :class="scrolled ? 'h-16' : 'h-20'">

      <!-- Logo Section (Left) -->
      <div class="flex-shrink-0 flex items-center z-10">
        <a href="{{ route('welcome') }}" class="flex items-center space-x-3 group">
          <img src="{{ asset('img/logo.png') }}" alt="The Manorah Spa Logo" class="h-10 md:h-12 w-auto object-contain transition-transform duration-500 group-hover:scale-105" />
        </a>
      </div>

      <!-- Desktop Navigation (Center) -->
      <div class="hidden md:flex absolute left-1/2 -translate-x-1/2 items-center bg-stone-200/50 dark:bg-stone-800/40 backdrop-blur-md px-3 py-1.5 rounded-full border border-stone-300/30 dark:border-stone-700/40 shadow-inner"
            :class="scrolled ? 'opacity-100 translate-y-0 scale-100' : 'md:bg-transparent md:border-transparent md:shadow-none'">
        <div class="flex items-center space-x-1">
            <!-- Home -->
            <a href="{{ route('welcome') }}"
               class="px-5 py-2 text-sm rounded-full transition-all duration-300 {{ $isHome ? 'bg-amber-600 text-white font-bold shadow-md shadow-amber-600/20' : 'font-semibold hover:text-amber-600 dark:hover:text-amber-400' }}"
               @if(!$isHome)
                   :class="scrolled ? 'dark:text-stone-300 text-stone-700 hover:bg-white/50 dark:hover:bg-white/10' : 'text-stone-800 dark:text-stone-200'"
               @endif>
               Home
            </a>

            <!-- About Us -->
            <a href="{{ route('about') }}"
               class="px-5 py-2 text-sm rounded-full transition-all duration-300 {{ $isAbout ? 'bg-amber-600 text-white font-bold shadow-md shadow-amber-600/20' : 'font-semibold hover:text-amber-600 dark:hover:text-amber-400' }}"
               @if(!$isAbout)
                   :class="scrolled ? 'dark:text-stone-300 text-stone-700 hover:bg-white/50 dark:hover:bg-white/10' : 'text-stone-800 dark:text-stone-200'"
               @endif>
               About Us
            </a>

            <!-- Services & Pricing -->
            <a href="{{ route('services') }}"
               class="px-5 py-2 text-sm rounded-full transition-all duration-300 {{ $isServices ? 'bg-amber-600 text-white font-bold shadow-md shadow-amber-600/20' : 'font-semibold hover:text-amber-600 dark:hover:text-amber-400' }}"
               @if(!$isServices)
                   :class="scrolled ? 'dark:text-stone-300 text-stone-700 hover:bg-white/50 dark:hover:bg-white/10' : 'text-stone-800 dark:text-stone-200'"
               @endif>
               Services & Pricing
            </a>

            <!-- Contact -->
            <a href="{{ route('contact') }}"
               class="px-5 py-2 text-sm rounded-full transition-all duration-300 {{ $isContact ? 'bg-amber-600 text-white font-bold shadow-md shadow-amber-600/20' : 'font-semibold hover:text-amber-600 dark:hover:text-amber-400' }}"
               @if(!$isContact)
                   :class="scrolled ? 'dark:text-stone-300 text-stone-700 hover:bg-white/50 dark:hover:bg-white/10' : 'text-stone-800 dark:text-stone-200'"
               @endif>
               Contact
            </a>
        </div>
      </div>

      <!-- Actions Section (Right) -->
      <div class="flex items-center space-x-4 z-10">
        <!-- Dark Mode Toggle -->
        <button @click="toggleDark()" 
                class="relative p-2 rounded-full text-stone-600 dark:text-stone-300 hover:bg-amber-500/10 transition-all duration-300 focus:outline-none group overflow-hidden border border-transparent hover:border-amber-500/20"
                aria-label="Toggle Dark Mode">
          <div class="relative w-6 h-6 flex items-center justify-center transform transition-transform duration-500" :class="darkMode ? 'rotate-180' : 'rotate-0'">
            <svg x-show="!darkMode" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M16.243 16.243l.707.707M7.757 7.757l.707.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
            </svg>
            <svg x-show="darkMode" x-cloak xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
            </svg>
          </div>
        </button>

        <!-- Auth / Dashboard Button (Desktop) -->
        @auth
          <a href="{{ url('/dashboard') }}" class="hidden sm:flex items-center space-x-2 px-6 py-2.5 bg-gradient-to-r from-amber-600 to-amber-700 hover:from-amber-700 hover:to-amber-800 text-white rounded-full text-sm font-bold shadow-lg shadow-amber-600/20 transition-all duration-300 hover:scale-105 active:scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
            <span>Dashboard</span>
          </a>
        @else
          <a href="{{ route('login') }}" class="hidden sm:flex items-center space-x-2 px-6 py-2.5 bg-amber-600 hover:bg-amber-700 text-white rounded-full text-sm font-bold shadow-lg shadow-amber-600/20 transition-all duration-300 hover:scale-105 active:scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
            </svg>
            <span>Login</span>
          </a>
        @endauth

        <!-- Mobile menu button -->
        <button @click="mobileMenu = !mobileMenu" 
                class="md:hidden p-2 rounded-xl text-stone-700 dark:text-stone-300 hover:bg-stone-100 dark:hover:bg-stone-800 transition-colors duration-200">
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
    <div class="bg-white/95 dark:bg-[#1c1815]/95 backdrop-blur-2xl rounded-3xl border border-amber-500/20 shadow-2xl p-4 space-y-2 pointer-events-auto overflow-hidden">
      <a href="{{ route('welcome') }}" @click="mobileMenu = false" class="flex items-center px-6 py-4 rounded-2xl text-base font-bold transition-all duration-300 {{ $isHome ? 'bg-amber-600 text-white' : 'text-stone-800 dark:text-stone-100 hover:bg-amber-600 hover:text-white' }}">Home</a>
      <a href="{{ route('about') }}" @click="mobileMenu = false" class="flex items-center px-6 py-4 rounded-2xl text-base font-bold transition-all duration-300 {{ $isAbout ? 'bg-amber-600 text-white' : 'text-stone-800 dark:text-stone-100 hover:bg-amber-600 hover:text-white' }}">About Us</a>
      <a href="{{ route('services') }}" @click="mobileMenu = false" class="flex items-center px-6 py-4 rounded-2xl text-base font-bold transition-all duration-300 {{ $isServices ? 'bg-amber-600 text-white' : 'text-stone-800 dark:text-stone-100 hover:bg-amber-600 hover:text-white' }}">Services & Pricing</a>
      <a href="{{ route('contact') }}" @click="mobileMenu = false" class="flex items-center px-6 py-4 rounded-2xl text-base font-bold transition-all duration-300 {{ $isContact ? 'bg-amber-600 text-white' : 'text-stone-800 dark:text-stone-100 hover:bg-amber-600 hover:text-white' }}">Contact</a>
      <div class="pt-4 px-2">
        @auth
          <a href="{{ url('/dashboard') }}" @click="mobileMenu = false" class="flex items-center justify-center space-x-3 w-full bg-gradient-to-r from-amber-600 to-amber-700 text-white py-4 rounded-2xl font-black shadow-xl shadow-amber-600/20 transition-all duration-300 active:scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
            <span>Dashboard</span>
          </a>
        @else
          <a href="{{ route('login') }}" @click="mobileMenu = false" class="flex items-center justify-center space-x-3 w-full bg-amber-600 text-white py-4 rounded-2xl font-black shadow-xl shadow-amber-600/20 transition-all duration-300 active:scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
            </svg>
            <span>Login</span>
          </a>
        @endauth
      </div>
    </div>
  </div>
</nav>
