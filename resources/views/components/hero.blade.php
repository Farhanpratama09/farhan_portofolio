@props(['portfolio'])

<section id="hero" class="relative pt-12 pb-20 md:pt-20 md:pb-28 overflow-hidden">
    <!-- Ambient Background Glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-gradient-to-tr from-indigo-500/10 via-sky-500/10 to-purple-500/10 rounded-full blur-3xl pointer-events-none -z-10"></div>
    
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center text-center">
            
            <!-- Availability Badge -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-600 dark:text-emerald-400 text-xs sm:text-sm font-medium mb-8">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                </span>
                Tersedia untuk Proyek & Kolaborasi
            </div>

            <!-- Main Greeting & Headline -->
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-zinc-900 dark:text-white max-w-4xl leading-[1.15]">
                Hai, Saya <span class="bg-gradient-to-r from-indigo-600 via-sky-500 to-indigo-400 bg-clip-text text-transparent">{{ $portfolio['name'] }}</span>
            </h1>

            <!-- Sub-headline -->
            <h2 class="mt-4 text-xl sm:text-2xl md:text-3xl font-semibold text-zinc-700 dark:text-zinc-300">
                {{ $portfolio['role'] }}
            </h2>

            <!-- Short Pitch / Bio -->
            <p class="mt-6 text-base sm:text-lg md:text-xl text-zinc-600 dark:text-zinc-400 max-w-2xl leading-relaxed">
                {{ $portfolio['tagline'] }}
            </p>

            <!-- Call-to-Action Buttons -->
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4">
                <a 
                    href="#projects" 
                    class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-semibold shadow-lg shadow-indigo-600/25 hover:shadow-indigo-600/40 hover:-translate-y-0.5 transition-all duration-200"
                >
                    <span>Lihat Proyek</span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                    </svg>
                </a>

                <a 
                    href="#contact" 
                    class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-white dark:bg-zinc-900 hover:bg-zinc-50 dark:hover:bg-zinc-800 text-zinc-800 dark:text-zinc-200 text-sm font-semibold border border-zinc-200 dark:border-zinc-800 hover:border-zinc-300 dark:hover:border-zinc-700 hover:-translate-y-0.5 shadow-sm transition-all duration-200"
                >
                    <span>Hubungi Saya</span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </a>
            </div>

            <!-- Mini Tech Pills in Hero -->
            <div class="mt-14 pt-8 border-t border-zinc-200/70 dark:border-zinc-800/70 flex flex-wrap items-center justify-center gap-2 sm:gap-3 text-xs text-zinc-500 dark:text-zinc-400">
                <span class="font-medium mr-1">Primary Focus:</span>
                <span class="px-2.5 py-1 rounded-md bg-zinc-100 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 text-zinc-700 dark:text-zinc-300 font-mono">Laravel 13</span>
                <span class="px-2.5 py-1 rounded-md bg-zinc-100 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 text-zinc-700 dark:text-zinc-300 font-mono">Tailwind CSS</span>
                <span class="px-2.5 py-1 rounded-md bg-zinc-100 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 text-zinc-700 dark:text-zinc-300 font-mono">Alpine.js</span>
                <span class="px-2.5 py-1 rounded-md bg-zinc-100 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 text-zinc-700 dark:text-zinc-300 font-mono">AI APIs</span>
            </div>

        </div>
    </div>
</section>
