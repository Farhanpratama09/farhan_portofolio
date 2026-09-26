@props(['portfolio'])

<section id="about" class="py-8 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-20">
    
    <!-- About Container Card -->
    <div class="relative rounded-3xl bg-white dark:bg-zinc-900 border border-sky-100 dark:border-zinc-800 p-6 sm:p-10 shadow-sm hover:shadow-md transition-all duration-300 overflow-hidden">
        
        <!-- Ambient Particles -->
        <div class="absolute top-4 right-8 text-sky-300/40 dark:text-sky-700/40 text-2xl font-bold select-none animate-float">✦</div>
        <div class="absolute bottom-6 left-8 text-sky-300/30 dark:text-sky-700/30 text-xl font-bold select-none animate-float-slow">✧</div>
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
            
            <!-- Left Info & Bio -->
            <div class="lg:col-span-7 space-y-4">
                
                <div class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-sky-100 dark:bg-sky-950 text-sky-700 dark:text-sky-300 text-xs font-bold">
                    <span>📌</span> {{ $portfolio['about']['subtitle'] }}
                </div>

                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-800 dark:text-white tracking-tight leading-snug">
                    {{ $portfolio['about']['title'] }}
                </h2>

                <p class="text-xs sm:text-sm text-slate-600 dark:text-zinc-400 leading-relaxed">
                    {{ $portfolio['about']['bio'] }}
                </p>

                <!-- Value Badges -->
                <div class="pt-2 flex flex-wrap gap-2 text-xs font-bold text-slate-600 dark:text-zinc-300">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-slate-50 dark:bg-zinc-800 border border-sky-100 dark:border-zinc-700">
                        <span class="text-sky-500">✔</span> Web Application
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-slate-50 dark:bg-zinc-800 border border-sky-100 dark:border-zinc-700">
                        <span class="text-sky-500">✔</span> Sistem Informasi
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-slate-50 dark:bg-zinc-800 border border-sky-100 dark:border-zinc-700">
                        <span class="text-sky-500">✔</span> Clean Code
                    </span>
                </div>

            </div>

            <!-- Right 3 Pillars Grid -->
            <div class="lg:col-span-5 flex flex-col space-y-3">
                @foreach ($portfolio['about']['pillars'] as $pillar)
                    <div class="group flex items-start gap-3.5 p-4 rounded-2xl bg-[#f4f6f9] dark:bg-zinc-800/70 border border-sky-100 dark:border-zinc-700/60 shadow-sm hover:shadow-md hover:-translate-y-1 hover:border-sky-300 dark:hover:border-sky-700 transition-all duration-300">
                        <span class="text-2xl shrink-0 p-2 rounded-xl bg-white dark:bg-zinc-900 border border-sky-100 dark:border-zinc-700 shadow-sm group-hover:scale-110 transition-transform">
                            {{ $pillar['emoji'] }}
                        </span>
                        <div class="space-y-0.5">
                            <h3 class="text-xs sm:text-sm font-bold text-slate-800 dark:text-white group-hover:text-sky-600 dark:group-hover:text-sky-400 transition-colors">
                                {{ $pillar['title'] }}
                            </h3>
                            <p class="text-[11px] text-slate-500 dark:text-zinc-400 leading-relaxed">
                                {{ $pillar['desc'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>

</section>
