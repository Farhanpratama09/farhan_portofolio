@props(['portfolio'])

<div id="projects" class="flex flex-col space-y-4">
    
    <!-- Section Title (Artwork > style from Image 3) -->
    <div class="flex items-center justify-between">
        <a href="#projects" class="group inline-flex items-center gap-1.5 text-lg font-extrabold text-slate-800 dark:text-white hover:text-sky-600 dark:hover:text-sky-400 transition">
            <span>Projects Showcase</span>
            <svg class="w-4 h-4 text-sky-500 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>

    <!-- 2 Portrait Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        @foreach ($portfolio['featured_projects'] as $project)
            <article class="relative flex flex-col justify-between rounded-3xl bg-gradient-to-b {{ $project['gradient'] }} p-5 text-white shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-white/10 group overflow-hidden min-h-[260px]">
                
                <!-- Background Particle Accent -->
                <div class="absolute top-2 right-3 text-white/20 text-xl font-bold select-none group-hover:scale-125 transition-transform">✦</div>
                <div class="absolute -bottom-8 -right-8 w-28 h-28 bg-sky-500/20 rounded-full blur-xl pointer-events-none"></div>

                <!-- Top: Project Title & Badges -->
                <div class="relative z-10 space-y-2">
                    <div class="flex flex-wrap gap-1.5">
                        @foreach ($project['tags'] as $tag)
                            <span class="px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-white/15 backdrop-blur-md text-sky-200 border border-white/10">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>

                    <h3 class="text-base font-bold text-white group-hover:text-sky-300 transition-colors leading-snug pt-1">
                        {{ $project['title'] }}
                    </h3>

                    <p class="text-xs text-sky-100/80 line-clamp-3 leading-relaxed">
                        {{ $project['description'] }}
                    </p>
                </div>

                <!-- Bottom: Author Tag & Action Link -->
                <div class="relative z-10 pt-4 border-t border-white/10 flex items-center justify-between text-xs text-sky-200">
                    <span class="text-[11px] font-medium text-sky-100/70">{{ $project['author'] }}</span>
                    
                    <a 
                        href="{{ $project['github'] }}" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="p-1.5 rounded-full bg-white/10 hover:bg-white/30 text-white transition hover:scale-110"
                        title="Lihat Detail Proyek"
                    >
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                    </a>
                </div>

            </article>
        @endforeach
    </div>

    <!-- Capsule Button: View More (Bottom of Column 1) -->
    <a 
        href="#contact" 
        class="w-full py-3 px-4 rounded-full bg-white dark:bg-zinc-900 hover:bg-sky-50 dark:hover:bg-zinc-800 text-slate-800 dark:text-zinc-200 font-extrabold text-xs sm:text-sm text-center border border-sky-100 dark:border-zinc-800 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200 block"
    >
        View More Projects
    </a>

</div>
