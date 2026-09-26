@props(['portfolio'])

<section id="projects" class="py-8 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Section Header (Artwork / Works > style) -->
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center gap-2">
            <span class="w-2.5 h-2.5 rounded-full bg-sky-500 animate-pulse"></span>
            <h2 class="text-xl sm:text-2xl font-extrabold text-slate-800 dark:text-white tracking-tight">
                Featured Projects
            </h2>
        </div>
        <a href="#contact" class="inline-flex items-center gap-1 text-xs font-extrabold text-sky-600 dark:text-sky-400 hover:text-sky-700 transition">
            <span>Diskusikan Kolaborasi</span>
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>

    <!-- 3 Dynamic Project Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($portfolio['projects'] as $project)
            <article class="relative flex flex-col justify-between rounded-3xl bg-gradient-to-b {{ $project['gradient'] }} p-6 text-white shadow-lg hover:shadow-2xl hover:-translate-y-1.5 transition-all duration-300 border border-white/15 group overflow-hidden">
                
                <!-- Ambient Top Particle Indicator -->
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

                    <p class="text-xs text-sky-100/85 leading-relaxed">
                        {{ $project['description'] }}
                    </p>
                </div>

                <!-- Middle: Tech Badges -->
                <div class="relative z-10 my-4 flex flex-wrap gap-1.5">
                    @foreach ($project['tags'] as $tag)
                        <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-black/25 backdrop-blur-sm text-sky-200 border border-white/10">
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
