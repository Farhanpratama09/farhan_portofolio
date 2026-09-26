@props(['portfolio'])

<header 
    x-data="{ mobileMenuOpen: false, scrolled: false }" 
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 15 })"
    :class="scrolled ? 'bg-white/85 dark:bg-zinc-950/85 backdrop-blur-md shadow-sm border-sky-100 dark:border-zinc-800' : 'bg-transparent border-transparent'"
    class="sticky top-0 z-50 transition-all duration-300 border-b w-full"
>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 sm:h-20">
            
            <!-- Left: FP Logo / Profile & Quick Add -->
            <div class="flex items-center gap-2">
                <a href="#" class="flex items-center justify-center w-10 h-10 rounded-2xl bg-slate-800 dark:bg-zinc-800 hover:bg-slate-900 text-white font-bold text-sm shadow-sm transition hover:scale-105" title="Farhan Pratama Profile">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </a>
                <a href="#contact" class="flex items-center justify-center w-10 h-10 rounded-2xl bg-sky-200 dark:bg-sky-900/60 hover:bg-sky-300 dark:hover:bg-sky-800 text-sky-800 dark:text-sky-200 font-bold transition hover:scale-105" title="Quick Action">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                    </svg>
                </a>
            </div>

            <!-- Center: Navigation Links with Active Pill Indicator -->
            <nav class="hidden md:flex items-center gap-1 bg-white/70 dark:bg-zinc-900/70 backdrop-blur-md px-4 py-1.5 rounded-full border border-sky-100 dark:border-zinc-800 shadow-sm">
                @foreach ($portfolio['nav'] as $item)
                    <a 
                        href="{{ $item['url'] }}" 
                        class="relative px-4 py-1.5 text-sm font-bold transition-all duration-200 {{ $item['active'] ? 'text-sky-600 dark:text-sky-400' : 'text-slate-600 dark:text-zinc-300 hover:text-sky-600 dark:hover:text-sky-400' }}"
                    >
                        <span>{{ $item['label'] }}</span>
                        @if($item['active'])
                            <span class="absolute bottom-0 left-1/2 -translate-x-1/2 w-4 h-0.5 bg-sky-500 rounded-full"></span>
                        @endif
                    </a>
                @endforeach
            </nav>

            <!-- Right: Action Buttons & Dark Mode -->
            <div class="flex items-center gap-2 sm:gap-3">
                <!-- Dark Mode Toggle Button -->
                <button 
                    @click="$store.darkMode.toggle()"
                    type="button" 
                    aria-label="Toggle Theme"
                    class="p-2.5 rounded-2xl bg-white dark:bg-zinc-900 hover:bg-sky-50 dark:hover:bg-zinc-800 text-slate-700 dark:text-zinc-200 border border-sky-100 dark:border-zinc-800 transition hover:scale-105 shadow-sm cursor-pointer"
                >
                    <svg x-show="$store.darkMode.on" x-cloak class="w-4 h-4 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg x-show="!$store.darkMode.on" class="w-4 h-4 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>

                <!-- Action Capsule Button -->
                <a 
                    href="#contact" 
                    class="hidden sm:inline-flex items-center gap-1.5 px-5 py-2 rounded-full bg-slate-800 hover:bg-slate-900 dark:bg-sky-600 dark:hover:bg-sky-700 text-white font-bold text-xs tracking-wide shadow-sm hover:shadow transition hover:-translate-y-0.5"
                >
                    <span>Hubungi</span>
                </a>

                <!-- Mobile Hamburger Button -->
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen" 
                    type="button" 
                    aria-label="Toggle Menu"
                    class="md:hidden p-2.5 rounded-2xl bg-white dark:bg-zinc-900 border border-sky-100 dark:border-zinc-800 text-slate-700 dark:text-zinc-200 transition"
                >
                    <svg x-show="!mobileMenuOpen" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div 
        x-show="mobileMenuOpen" 
        x-cloak 
        @click.away="mobileMenuOpen = false"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden border-b border-sky-100 dark:border-zinc-800 bg-white/95 dark:bg-zinc-950/95 backdrop-blur-lg px-4 pt-2 pb-6 space-y-1 shadow-lg"
    >
        @foreach ($portfolio['nav'] as $item)
            <a 
                href="{{ $item['url'] }}" 
                @click="mobileMenuOpen = false"
                class="block px-4 py-2.5 rounded-2xl text-sm font-bold text-slate-700 dark:text-zinc-200 hover:bg-sky-50 dark:hover:bg-zinc-800 hover:text-sky-600 transition"
            >
                {{ $item['label'] }}
            </a>
        @endforeach
    </div>
</header>
