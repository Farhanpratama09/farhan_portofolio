@props(['portfolio'])

<section id="dashboard" class="py-6 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
        
        <!-- Left: Interactive Lofi Dev Beats Player (Inspirasi Image 1) -->
        <div 
            x-data="{ isPlaying: false, progress: 35 }"
            class="lg:col-span-5 rounded-3xl bg-white dark:bg-zinc-900 border border-sky-100 dark:border-zinc-800 p-6 sm:p-7 shadow-sm flex flex-col justify-between relative overflow-hidden"
        >
            <!-- Background Ambient Glow -->
            <div class="absolute -top-12 -right-12 w-32 h-32 bg-sky-200/40 dark:bg-sky-900/20 rounded-full blur-2xl pointer-events-none"></div>

            <!-- Header -->
            <div class="flex items-center justify-between pb-4 border-b border-sky-50 dark:border-zinc-800">
                <div class="flex items-center gap-2">
                    <span class="text-lg">🎧</span>
                    <div>
                        <h3 class="text-xs font-extrabold uppercase tracking-wider text-slate-400 dark:text-zinc-500">Dev Player</h3>
                        <p class="text-sm font-extrabold text-slate-800 dark:text-white">{{ $portfolio['music']['bpm'] }}</p>
                    </div>
                </div>
                <!-- Equalizer Visualizer Bars (Animated via Alpine) -->
                <div class="flex items-end gap-1 h-5">
                    <span :class="isPlaying ? 'animate-bounce h-5' : 'h-2'" class="w-1 bg-sky-500 rounded-full transition-all duration-300"></span>
                    <span :class="isPlaying ? 'animate-bounce h-3' : 'h-4'" class="w-1 bg-indigo-500 rounded-full transition-all duration-300"></span>
                    <span :class="isPlaying ? 'animate-bounce h-5' : 'h-1.5'" class="w-1 bg-sky-400 rounded-full transition-all duration-300"></span>
                    <span :class="isPlaying ? 'animate-bounce h-4' : 'h-3'" class="w-1 bg-cyan-400 rounded-full transition-all duration-300"></span>
                </div>
            </div>

            <!-- Turntable / Vinyl Disk Center -->
            <div class="my-6 flex items-center gap-5">
                <!-- Vinyl Disc with Spinning Animation -->
                <div class="relative shrink-0">
                    <div 
                        :class="isPlaying ? 'animate-spin' : ''"
                        style="animation-duration: 4s;"
                        class="w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-slate-900 border-4 border-slate-700 shadow-xl flex items-center justify-center relative transition-all"
                    >
                        <!-- Grooves -->
                        <div class="w-14 h-14 rounded-full border border-slate-700/60 flex items-center justify-center">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-sky-400 to-indigo-500 flex items-center justify-center shadow-inner">
                                <div class="w-2.5 h-2.5 rounded-full bg-slate-900"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Track Info -->
                <div class="space-y-1 overflow-hidden">
                    <span class="inline-block px-2.5 py-0.5 rounded-full bg-sky-100 dark:bg-sky-950 text-sky-700 dark:text-sky-300 font-extrabold text-[10px]">
                        Coding Session
                    </span>
                    <h4 class="text-sm sm:text-base font-extrabold text-slate-800 dark:text-white truncate">
                        {{ $portfolio['music']['title'] }}
                    </h4>
                    <p class="text-xs text-slate-500 dark:text-zinc-400 truncate">
                        {{ $portfolio['music']['artist'] }}
                    </p>
                </div>
            </div>

            <!-- Playback Controls & Progress Bar -->
            <div class="space-y-3 pt-2">
                <!-- Progress Line -->
                <div class="w-full bg-slate-100 dark:bg-zinc-800 h-1.5 rounded-full overflow-hidden">
                    <div :style="`width: ${isPlaying ? 70 : 35}%`" class="bg-gradient-to-r from-sky-500 to-indigo-500 h-full rounded-full transition-all duration-500"></div>
                </div>

                <!-- Control Buttons -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <!-- Prev -->
                        <button type="button" @click="isPlaying = true" class="text-slate-400 hover:text-sky-600 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6 6h2v12H6zm3.5 6l8.5 6V6z"/></svg>
                        </button>
                        <!-- Play/Pause Main Button -->
                        <button 
                            type="button" 
                            @click="isPlaying = !isPlaying"
                            class="w-10 h-10 rounded-full bg-sky-500 hover:bg-sky-600 text-white shadow-md shadow-sky-500/25 flex items-center justify-center transition hover:scale-110 cursor-pointer"
                        >
                            <!-- Play Icon -->
                            <svg x-show="!isPlaying" class="w-4 h-4 ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            <!-- Pause Icon -->
                            <svg x-show="isPlaying" x-cloak class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                        </button>
                        <!-- Next -->
                        <button type="button" @click="isPlaying = true" class="text-slate-400 hover:text-sky-600 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6 18l8.5-6L6 6v12zM16 6v12h2V6h-2z"/></svg>
                        </button>
                    </div>

                    <span class="text-[11px] font-bold text-sky-600 dark:text-sky-400">
                        <span x-text="isPlaying ? 'Playing ♪' : 'Paused'"></span>
                    </span>
                </div>
            </div>

        </div>

        <!-- Right: About & Engineering Strengths (Inspirasi Image 1 & 3) -->
        <div class="lg:col-span-7 rounded-3xl bg-white dark:bg-zinc-900 border border-sky-100 dark:border-zinc-800 p-6 sm:p-7 shadow-sm flex flex-col justify-between space-y-6">
            
            <!-- Top Bio & Headline -->
            <div>
                <div class="flex items-center justify-between mb-3">
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-sky-100 dark:bg-sky-950 text-sky-700 dark:text-sky-300 text-xs font-bold">
                        <span>✦</span> Core Capabilities
                    </div>
                    <span class="text-xs text-slate-400 dark:text-zinc-500 font-bold">Farhan P. Space</span>
                </div>

                <h3 class="text-lg sm:text-xl font-extrabold text-slate-800 dark:text-white">
                    Perancangan Sistem & Rekayasa Perangkat Lunak
                </h3>
                <p class="mt-2 text-xs sm:text-sm text-slate-600 dark:text-zinc-400 leading-relaxed">
                    Berfokus pada pengembangan backend yang tangguh dengan Laravel & MySQL, dipadukan antarmuka pengguna yang responsif, interaktif, serta implementasi logika sistem terstruktur.
                </p>
            </div>

            <!-- 3 Strength Pillars -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                <div class="p-4 rounded-2xl bg-[#f4f6f9] dark:bg-zinc-800/60 border border-sky-100 dark:border-zinc-700/60 space-y-1">
                    <div class="text-xl">🏛️</div>
                    <h4 class="text-xs font-extrabold text-slate-800 dark:text-white">Clean Architecture</h4>
                    <p class="text-[11px] text-slate-500 dark:text-zinc-400">Kode modular, terorganisir, dan mudah di-maintain.</p>
                </div>
                <div class="p-4 rounded-2xl bg-[#f4f6f9] dark:bg-zinc-800/60 border border-sky-100 dark:border-zinc-700/60 space-y-1">
                    <div class="text-xl">📊</div>
                    <h4 class="text-xs font-extrabold text-slate-800 dark:text-white">System Evaluation</h4>
                    <p class="text-[11px] text-slate-500 dark:text-zinc-400">Implementasi metode analitis & perhitungan data terstruktur.</p>
                </div>
                <div class="p-4 rounded-2xl bg-[#f4f6f9] dark:bg-zinc-800/60 border border-sky-100 dark:border-zinc-700/60 space-y-1">
                    <div class="text-xl">⚡</div>
                    <h4 class="text-xs font-extrabold text-slate-800 dark:text-white">Modern Frontend</h4>
                    <p class="text-[11px] text-slate-500 dark:text-zinc-400">Tailwind CSS & Alpine.js untuk UX yang lincah.</p>
                </div>
            </div>

            <!-- Interactive Pill Tags -->
            <div class="pt-2 border-t border-sky-50 dark:border-zinc-800 flex flex-wrap items-center gap-1.5">
                <span class="text-xs font-bold text-slate-400 mr-1">Stack:</span>
                @foreach ($portfolio['skills_tags'] as $skill)
                    <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-sky-50 dark:bg-zinc-800 text-sky-700 dark:text-sky-300 border border-sky-100 dark:border-zinc-700 hover:bg-sky-100 transition">
                        {{ $skill['name'] }}
                    </span>
                @endforeach
            </div>

        </div>

    </div>

</section>
