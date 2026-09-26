@props(['portfolio'])

<section id="projects" class="py-20 bg-zinc-100/50 dark:bg-zinc-900/30 border-y border-zinc-200/60 dark:border-zinc-800/60 scroll-mt-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex flex-col items-center text-center mb-16">
            <h2 class="text-xs font-semibold uppercase tracking-wider text-indigo-600 dark:text-indigo-400 mb-2">Portfolio Showcase</h2>
            <p class="text-3xl sm:text-4xl font-bold tracking-tight text-zinc-900 dark:text-white">
                Proyek & Karya Unggulan
            </p>
            <p class="mt-3 text-base text-zinc-600 dark:text-zinc-400 max-w-xl">
                Beberapa proyek pilihan yang mendemonstrasikan keahlian dalam arsitektur web backend, antarmuka modern, dan integrasi AI.
            </p>
            <div class="w-12 h-1 bg-indigo-600 rounded-full mt-4"></div>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($portfolio['projects'] as $project)
                <article class="flex flex-col rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 overflow-hidden shadow-sm hover:shadow-xl hover:border-indigo-500/40 dark:hover:border-indigo-500/40 transition-all duration-300 group">
                    
                    <!-- Card Media / Mockup Area -->
                    <div class="relative h-48 bg-gradient-to-br from-zinc-800 to-zinc-950 p-6 flex flex-col justify-between overflow-hidden">
                        <!-- Abstract Pattern / Glow -->
                        <div class="absolute -right-8 -bottom-8 w-36 h-36 bg-indigo-500/20 rounded-full blur-2xl group-hover:scale-125 transition-transform duration-500"></div>
                        
                        <!-- Top Category Tag -->
                        <div class="relative z-10 flex items-center justify-between">
                            <span class="px-2.5 py-1 rounded-md text-xs font-semibold bg-white/10 backdrop-blur-md text-white border border-white/10">
                                {{ $project['category'] }}
                            </span>
                            @if(!empty($project['featured']))
                                <span class="flex items-center gap-1 text-[11px] font-medium text-amber-300">
                                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    Featured
                                </span>
                            @endif
                        </div>

                        <!-- Card Visual Mockup Placeholder -->
                        <div class="relative z-10 font-mono text-xs text-zinc-400 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                            <span class="truncate">{{ $project['title'] }}</span>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
                        <div>
                            <h3 class="text-lg font-bold text-zinc-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                {{ $project['title'] }}
                            </h3>
                            <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400 leading-relaxed line-clamp-3">
                                {{ $project['description'] }}
                            </p>

                            <!-- Problem & Solution Highlight -->
                            @if (!empty($project['problem_solution']))
                                <div class="mt-4 p-3 rounded-xl bg-indigo-50/60 dark:bg-indigo-950/30 border border-indigo-100 dark:border-indigo-900/40 text-xs text-indigo-900 dark:text-indigo-200">
                                    <span class="font-semibold text-indigo-700 dark:text-indigo-300">Dampak:</span> {{ $project['problem_solution'] }}
                                </div>
                            @endif
                        </div>

                        <!-- Tech Badges & Actions -->
                        <div class="space-y-5 pt-2">
                            <!-- Tech Badges -->
                            <div class="flex flex-wrap gap-1.5">
                                @foreach ($project['tags'] as $tag)
                                    <span class="px-2 py-0.5 rounded-md bg-zinc-100 dark:bg-zinc-800 text-zinc-700 dark:text-zinc-300 text-xs font-mono">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>

                            <!-- Card Action Buttons -->
                            <div class="flex items-center gap-3 pt-3 border-t border-zinc-100 dark:border-zinc-800">
                                @if (!empty($project['github']) && $project['github'] !== '#')
                                    <a 
                                        href="{{ $project['github'] }}" 
                                        target="_blank" 
                                        rel="noopener noreferrer" 
                                        class="flex-1 inline-flex items-center justify-center gap-1.5 px-3 py-2 rounded-lg text-xs font-semibold bg-zinc-100 dark:bg-zinc-800 hover:bg-zinc-200 dark:hover:bg-zinc-700 text-zinc-800 dark:text-zinc-200 transition"
                                    >
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path>
                                        </svg>
                                        <span>Code</span>
                                    </a>
                                @endif

                                @if (!empty($project['demo']) && $project['demo'] !== '#')
                                    <a 
                                        href="{{ $project['demo'] }}" 
                                        target="_blank" 
                                        rel="noopener noreferrer" 
                                        class="flex-1 inline-flex items-center justify-center gap-1.5 px-3 py-2 rounded-lg text-xs font-semibold bg-indigo-600 hover:bg-indigo-700 text-white shadow-sm transition"
                                    >
                                        <span>Live Demo</span>
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>

                    </div>
                </article>
            @endforeach
        </div>

    </div>
</section>
