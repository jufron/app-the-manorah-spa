
<div x-data="{ 
        show: false,
        scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
        }"
        x-init="window.addEventListener('scroll', () => { show = window.pageYOffset > 500 })"
        class="fixed bottom-8 right-8 z-[100] flex flex-col space-y-4 items-end">

    <!-- WhatsApp Button (Always Visible) -->
    <div class="group relative flex items-center">
        <!-- Tooltip -->
        <div class="absolute right-full mr-4 px-3 py-1.5 bg-gray-900/90 dark:bg-white/90 backdrop-blur-md text-white dark:text-gray-900 text-[10px] font-black uppercase tracking-widest rounded-lg opacity-0 group-hover:opacity-100 translate-x-2 group-hover:translate-x-0 transition-all duration-300 pointer-events-none whitespace-nowrap shadow-xl border border-white/10">
            Contact Concierge
        </div>
        
        <a href="https://wa.me/628123456789" target="_blank" 
            class="w-14 h-14 glass flex items-center justify-center rounded-2xl text-[#25D366] shadow-2xl hover:scale-110 active:scale-95 transition-all duration-500 border border-white/40 dark:border-white/10 group-hover:bg-[#25D366] group-hover:text-white">
            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.246 2.248 3.484 5.232 3.484 8.412-.003 6.557-5.338 11.892-11.893 11.892-1.942-.001-3.841-.48-5.538-1.391l-6.459 1.699zm6.335-3.532c1.546.916 3.463 1.4 5.473 1.402 5.512 0 10.005-4.493 10.008-10.007.001-2.672-1.041-5.183-2.935-7.078-1.892-1.894-4.403-2.933-7.075-2.933-5.515 0-10.01 4.495-10.013 10.01-.001 1.917.5 3.775 1.447 5.389l-1.085 3.963 4.18-1.1zm11.312-7.105c-.31-.156-1.834-.905-2.112-1.006-.277-.101-.48-.151-.68.151-.2.302-.777.981-.952 1.182-.176.201-.351.227-.662.071-.31-.156-1.31-.483-2.496-1.541-.923-.824-1.545-1.841-1.725-2.143-.18-.302-.019-.465.136-.619.139-.138.31-.362.465-.544.155-.181.206-.31.31-.517.103-.207.051-.387-.026-.543-.077-.156-.68-1.638-.932-2.242-.245-.588-.493-.509-.68-.518-.176-.009-.377-.01-.578-.01-.201 0-.529.076-.806.377-.277.302-1.058 1.032-1.058 2.515 0 1.483 1.079 2.914 1.229 3.116.15.201 2.125 3.245 5.148 4.553.719.311 1.28.497 1.717.636.722.227 1.378.195 1.898.117.58-.087 1.834-.75 2.091-1.474.258-.724.258-1.344.181-1.474-.077-.13-.284-.207-.593-.364z"/>
            </svg>
        </a>
    </div>

    <!-- Scroll To Top Button (Appears on Scroll) -->
    <div class="group relative flex items-center"
            x-show="show"
            x-transition:enter="transition ease-out duration-500"
            x-transition:enter-start="opacity-0 translate-y-10 blur-sm"
            x-transition:enter-end="opacity-100 translate-y-0 blur-0"
            x-transition:leave="transition ease-in duration-400"
            x-transition:leave-start="opacity-100 translate-y-0 blur-0"
            x-transition:leave-end="opacity-0 translate-y-10 blur-sm"
            style="display: none;">
        <!-- Tooltip -->
        <div class="absolute right-full mr-4 px-3 py-1.5 bg-gray-900/90 dark:bg-white/90 backdrop-blur-md text-white dark:text-gray-900 text-[10px] font-black uppercase tracking-widest rounded-lg opacity-0 group-hover:opacity-100 translate-x-2 group-hover:translate-x-0 transition-all duration-300 pointer-events-none whitespace-nowrap shadow-xl border border-white/10">
            Back To Top
        </div>
        
        <button @click="scrollToTop()" 
                class="w-14 h-14 glass flex items-center justify-center rounded-2xl text-rose-500 dark:text-rose-400 shadow-2xl hover:scale-110 active:scale-95 transition-all duration-500 border border-white/40 dark:border-white/10 group-hover:bg-rose-500 group-hover:text-white">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7"></path>
            </svg>
        </button>
    </div>
</div>