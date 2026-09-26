@props(['portfolio'])

<section 
    id="projects" 
    x-data="{
        selectedCategory: 'all',
        viewMode: 'slider', // 'slider' or 'grid'
        scrollLeft() {
            this.$refs.carousel.scrollBy({ left: -380, behavior: 'smooth' });
        },
        scrollRight() {
            this.$refs.carousel.scrollBy({ left: 380, behavior: 'smooth' });
        }
    }"
    class="py-8 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-20"
>
    
    <!-- Section Header & Controls -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
        <div>
            <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-sky-500 lamp-indicator animate-pulse"></span>
                <h2 class="text-xl sm:text-2xl font-extrabold text-slate-800 dark:text-white tracking-tight">
                    Projects Showcase
                </h2>
                <span class="px-2.5 py-0.5 rounded-full bg-sky-100 dark:bg-sky-950 text-sky-700 dark:text-sky-300 font-extrabold text-[11px]">
                    {{ count($portfolio['projects']) }} Karya
                </span>
            </div>
            <p class="text-xs text-slate-500 dark:text-zinc-400 mt-1">
                Geser ke samping atau gunakan filter kategori untuk menjelajah seluruh proyek.
            </p>
        </div>

        <!-- Controls: Category Filter & Carousel Nav -->
        <div class="flex items-center gap-2">
            <!-- Grid / Slider View Switcher -->
            <button 
                type="button" 
                @click="viewMode = viewMode === 'slider' ? 'grid' : 'slider'"
                class="px-3 py-1.5 rounded-full bg-white dark:bg-zinc-900 border border-sky-100 dark:border-zinc-800 text-slate-700 dark:text-zinc-200 text-xs font-bold shadow-sm hover:bg-sky-50 dark:hover:bg-zinc-800 transition flex items-center gap-1.5 cursor-pointer"
                :title="viewMode === 'slider' ? 'Ubah ke Mode Grid' : 'Ubah ke Mode Slider'"
            >
                <span x-text="viewMode === 'slider' ? '⊞ Grid' : '⟷ Slider'"></span>
            </button>

            <!-- Carousel Navigation Arrows (Enabled in slider mode) -->
            <div x-show="viewMode === 'slider'" class="flex items-center gap-1.5">
                <button 
                    @click="scrollLeft()"
                    type="button" 
                    aria-label="Scroll Left"
                    class="w-8 h-8 rounded-full bg-white dark:bg-zinc-900 border border-sky-100 dark:border-zinc-800 text-slate-700 dark:text-zinc-200 hover:bg-sky-500 hover:text-white hover:border-sky-500 shadow-sm flex items-center justify-center transition hover:scale-110 cursor-pointer"
                >
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                </button>
                <button 
                    @click="scrollRight()"
                    type="button" 
                    aria-label="Scroll Right"
                    class="w-8 h-8 rounded-full bg-white dark:bg-zinc-900 border border-sky-100 dark:border-zinc-800 text-slate-700 dark:text-zinc-200 hover:bg-sky-500 hover:text-white hover:border-sky-500 shadow-sm flex items-center justify-center transition hover:scale-110 cursor-pointer"
                >
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Category Filter Pills -->
    <div class="flex items-center gap-2 overflow-x-auto no-scrollbar pb-3 mb-4">
        <button 
            @click="selectedCategory = 'all'"
            :class="selectedCategory === 'all' ? 'bg-sky-500 text-white shadow-md shadow-sky-500/25' : 'bg-white dark:bg-zinc-900 text-slate-600 dark:text-zinc-300 border border-sky-100 dark:border-zinc-800 hover:bg-sky-50'"
            class="px-3.5 py-1 rounded-full text-xs font-bold transition whitespace-nowrap cursor-pointer"
        >
            Semua Proyek
        </button>
        <button 
            @click="selectedCategory = 'System Information'"
            :class="selectedCategory === 'System Information' ? 'bg-sky-500 text-white shadow-md shadow-sky-500/25' : 'bg-white dark:bg-zinc-900 text-slate-600 dark:text-zinc-300 border border-sky-100 dark:border-zinc-800 hover:bg-sky-50'"
            class="px-3.5 py-1 rounded-full text-xs font-bold transition whitespace-nowrap cursor-pointer"
        >
            Sistem Informasi
        </button>
        <button 
            @click="selectedCategory = 'AI & Web Service'"
            :class="selectedCategory === 'AI & Web Service' ? 'bg-sky-500 text-white shadow-md shadow-sky-500/25' : 'bg-white dark:bg-zinc-900 text-slate-600 dark:text-zinc-300 border border-sky-100 dark:border-zinc-800 hover:bg-sky-50'"
            class="px-3.5 py-1 rounded-full text-xs font-bold transition whitespace-nowrap cursor-pointer"
        >
            AI & Smart Tools
        </button>
        <button 
            @click="selectedCategory = 'Frontend & Dashboard'"
            :class="selectedCategory === 'Frontend & Dashboard' ? 'bg-sky-500 text-white shadow-md shadow-sky-500/25' : 'bg-white dark:bg-zinc-900 text-slate-600 dark:text-zinc-300 border border-sky-100 dark:border-zinc-800 hover:bg-sky-50'"
            class="px-3.5 py-1 rounded-full text-xs font-bold transition whitespace-nowrap cursor-pointer"
        >
            Dashboard UI
        </button>
    </div>

    <!-- Scalable Projects Container: Seamless Slider & Grid Support -->
    <div 
        x-ref="carousel"
        :class="viewMode === 'slider' ? 'flex gap-6 overflow-x-auto snap-x snap-mandatory no-scrollbar pb-4 scroll-smooth' : 'grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6'"
    >
        @foreach ($portfolio['projects'] as $project)
            <article 
                x-show="selectedCategory === 'all' || selectedCategory === '{{ $project['category'] }}'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                :class="viewMode === 'slider' ? 'min-w-[300px] sm:min-w-[340px] md:min-w-[360px] snap-start' : 'w-full'"
                class="relative flex flex-col justify-between rounded-3xl bg-gradient-to-b {{ $project['gradient'] }} p-6 text-white shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-white/15 group overflow-hidden"
            >
                <!-- Ambient Top Star Particle -->
                <div class="absolute top-3 right-4 text-white/20 text-xl font-bold select-none group-hover:scale-125 transition-transform">✦</div>
                <div class="absolute -bottom-10 -right-10 w-36 h-36 bg-sky-400/20 rounded-full blur-2xl pointer-events-none"></div>

                <!-- Top: Category Badge & Title -->
                <div class="relative z-10 space-y-3">
                    <span class="inline-block px-3 py-1 rounded-full text-[10px] font-extrabold bg-white/20 backdrop-blur-md text-sky-100 border border-white/20">
                        {{ $project['category'] }}
                    </span>

                    <h3 class="text-lg font-extrabold text-white group-hover:text-sky-300 transition-colors leading-snug">
                        {{ $project['title'] }}
                    </h3>

                    <p class="text-xs text-sky-100/85 leading-relaxed line-clamp-3">
                        {{ $project['description'] }}
                    </p>
                </div>

                <!-- Middle: Tech Badges -->
                <div class="relative z-10 my-5 flex flex-wrap gap-1.5">
                    @foreach ($project['tags'] as $tag)
                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-black/30 backdrop-blur-sm text-sky-200 border border-white/10">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>

                <!-- Bottom: Action Buttons -->
                <div class="relative z-10 pt-4 border-t border-white/15 flex items-center justify-between gap-2">
                    <a 
                        href="{{ $project['github'] }}" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="flex-1 inline-flex items-center justify-center gap-1.5 py-2 px-3 rounded-full bg-white/15 hover:bg-white/30 text-white font-extrabold text-xs transition"
                    >
                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path>
                        </svg>
                        <span>Code</span>
                    </a>

                    <a 
                        href="#contact" 
                        class="flex-1 inline-flex items-center justify-center gap-1.5 py-2 px-3 rounded-full bg-white text-slate-900 font-extrabold text-xs shadow hover:bg-sky-50 transition"
                    >
                        <span>Demo</span>
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>

            </article>
        @endforeach
    </div>

</section>
