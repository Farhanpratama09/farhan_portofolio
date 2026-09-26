@props(['portfolio'])

<header 
    x-data="{ 
        mobileMenuOpen: false, 
        scrolled: false,
        activeSection: 'hero',
        sections: ['hero', 'projects', 'about', 'dashboard', 'contact'],
        init() {
            window.addEventListener('scroll', () => { 
                this.scrolled = window.scrollY > 20;
                
                // Intersection Observer / Scroll Spy
                for (let section of this.sections) {
                    let el = document.getElementById(section);
                    if (el) {
                        let rect = el.getBoundingClientRect();
                        if (rect.top <= 200 && rect.bottom >= 150) {
                            this.activeSection = section;
                            break;
                        }
                    }
                }
            });
        }
    }" 
    :class="scrolled ? 'bg-white/85 dark:bg-zinc-950/85 backdrop-blur-md shadow-sm border-sky-100 dark:border-zinc-800' : 'bg-transparent border-transparent'"
    class="sticky top-0 z-50 transition-all duration-300 border-b w-full"
>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 sm:h-20">
            
            <!-- Logo & Brand Badge -->
            <a href="#hero" @click="activeSection = 'hero'" class="group flex items-center gap-2.5 transition">
                <span class="flex items-center justify-center w-10 h-10 rounded-2xl bg-gradient-to-tr from-sky-400 to-indigo-600 text-white font-extrabold text-sm shadow-md shadow-sky-500/20 group-hover:scale-105 transition-transform">
                    FP
                </span>
                <div class="flex flex-col">
                    <span class="text-base font-extrabold text-slate-800 dark:text-white leading-tight group-hover:text-sky-600 dark:group-hover:text-sky-400 transition-colors">
                        Farhan Pratama
                    </span>
                    <span class="text-[10px] font-bold text-sky-600 dark:text-sky-400 tracking-wider uppercase">
                        {{ $portfolio['japanese_role'] }}
                    </span>
                </div>
            </a>

            <!-- Desktop Nav Pill Links with Glowing Lamp Indicator -->
            <nav class="hidden md:flex items-center gap-1.5 bg-white/90 dark:bg-zinc-900/90 backdrop-blur-md px-3.5 py-1.5 rounded-full border border-sky-100 dark:border-zinc-800 shadow-sm">
                @foreach ($portfolio['nav'] as $item)
                    <a 
                        href="{{ $item['url'] }}" 
                        @click="activeSection = '{{ $item['id'] }}'"
                        :class="activeSection === '{{ $item['id'] }}' ? 'bg-sky-100/90 dark:bg-sky-950/90 text-sky-600 dark:text-sky-300 shadow-inner' : 'text-slate-600 dark:text-zinc-300 hover:text-sky-600 dark:hover:text-sky-400 hover:bg-sky-50/70 dark:hover:bg-zinc-800/60'"
                        class="relative flex items-center gap-2 px-4 py-1.5 rounded-full text-xs font-bold transition-all duration-300 cursor-pointer"
                    >
                        <!-- Glowing Lamp Light Indicator (Lampu Penanda Halaman) -->
                        <span 
                            x-show="activeSection === '{{ $item['id'] }}'" 
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-50"
                            x-transition:enter-end="opacity-100 scale-100"
                            class="w-2 h-2 rounded-full bg-sky-500 lamp-indicator animate-pulse shrink-0"
                        ></span>

                        <span>{{ $item['label'] }}</span>
                    </a>
                @endforeach
            </nav>

            <!-- Actions: Theme Toggle & Quick Action -->
            <div class="flex items-center gap-2.5">
                <!-- Theme Switcher -->
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

                <!-- Action CTA Pill -->
                <a 
                    href="#contact" 
                    class="hidden sm:inline-flex items-center gap-1.5 px-5 py-2 rounded-full bg-sky-500 hover:bg-sky-600 text-white font-extrabold text-xs shadow-md shadow-sky-500/20 transition hover:-translate-y-0.5"
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
                @click="mobileMenuOpen = false; activeSection = '{{ $item['id'] }}'"
                :class="activeSection === '{{ $item['id'] }}' ? 'bg-sky-50 dark:bg-zinc-800 text-sky-600 dark:text-sky-400 font-extrabold' : 'text-slate-700 dark:text-zinc-200'"
                class="flex items-center justify-between px-4 py-2.5 rounded-2xl text-sm font-bold hover:bg-sky-50 dark:hover:bg-zinc-800 hover:text-sky-600 transition"
            >
                <span>{{ $item['label'] }}</span>
                <span x-show="activeSection === '{{ $item['id'] }}'" class="w-2 h-2 rounded-full bg-sky-500 lamp-indicator"></span>
            </a>
        @endforeach
    </div>
</header>
