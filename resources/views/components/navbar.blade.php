@props(['portfolio'])

<header 
    x-data="{ mobileMenuOpen: false, scrolled: false }" 
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
    :class="scrolled ? 'bg-white/80 dark:bg-zinc-950/80 backdrop-blur-md shadow-sm border-zinc-200/80 dark:border-zinc-800/80' : 'bg-transparent border-transparent'"
    class="sticky top-0 z-50 transition-all duration-300 border-b w-full"
>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 sm:h-20">
            <!-- Brand / Logo -->
            <a href="#" class="group flex items-center gap-2 text-lg sm:text-xl font-bold tracking-tight text-zinc-900 dark:text-white transition">
                <span class="inline-flex items-center justify-center w-8 h-8 sm:w-9 sm:h-9 rounded-xl bg-gradient-to-tr from-indigo-600 via-indigo-500 to-sky-400 text-white font-mono text-sm shadow-md shadow-indigo-500/20 group-hover:scale-105 transition-transform">
                    FP
                </span>
                <span class="bg-gradient-to-r from-zinc-900 via-zinc-800 to-zinc-600 dark:from-white dark:via-zinc-200 dark:to-zinc-400 bg-clip-text text-transparent">
                    Farhan Pratama
                </span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center gap-1 lg:gap-2">
                @foreach ($portfolio['nav'] as $item)
                    <a 
                        href="{{ $item['url'] }}" 
                        class="px-3.5 py-2 text-sm font-medium text-zinc-600 dark:text-zinc-300 hover:text-indigo-600 dark:hover:text-indigo-400 hover:bg-zinc-100/60 dark:hover:bg-zinc-800/60 rounded-lg transition"
                    >
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </nav>

            <!-- Actions: Dark Mode & Mobile Menu Button -->
            <div class="flex items-center gap-2">
                <!-- Dark Mode Toggle Button -->
                <button 
                    @click="$store.darkMode.toggle()"
                    type="button" 
                    aria-label="Toggle Dark Mode"
                    class="p-2 rounded-xl text-zinc-600 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800/80 border border-zinc-200 dark:border-zinc-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition cursor-pointer"
                >
                    <!-- Sun Icon (shown in dark mode) -->
                    <svg x-show="$store.darkMode.on" x-cloak class="w-5 h-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <!-- Moon Icon (shown in light mode) -->
                    <svg x-show="!$store.darkMode.on" class="w-5 h-5 text-zinc-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>

                <!-- Mobile Menu Button (Hamburger) -->
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen" 
                    type="button" 
                    aria-label="Open mobile menu"
                    class="md:hidden p-2 rounded-xl text-zinc-600 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-800/80 border border-zinc-200 dark:border-zinc-800 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition cursor-pointer"
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
        class="md:hidden border-b border-zinc-200 dark:border-zinc-800 bg-white/95 dark:bg-zinc-950/95 backdrop-blur-lg px-4 pt-2 pb-6 space-y-1 shadow-xl"
    >
        @foreach ($portfolio['nav'] as $item)
            <a 
                href="{{ $item['url'] }}" 
                @click="mobileMenuOpen = false"
                class="block px-4 py-2.5 rounded-lg text-base font-medium text-zinc-700 dark:text-zinc-200 hover:bg-zinc-100 dark:hover:bg-zinc-800/80 hover:text-indigo-600 dark:hover:text-indigo-400 transition"
            >
                {{ $item['label'] }}
            </a>
        @endforeach
    </div>
</header>
