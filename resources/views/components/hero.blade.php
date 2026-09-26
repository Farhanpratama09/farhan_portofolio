@props(['portfolio'])

<section id="hero" class="relative py-4 sm:py-8 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Main Banner Card -->
    <div class="relative w-full rounded-3xl bg-gradient-to-r from-sky-400 via-sky-500 to-sky-700 dark:from-sky-800 dark:via-sky-900 dark:to-indigo-950 p-6 sm:p-10 md:p-12 overflow-hidden shadow-xl shadow-sky-500/15 border border-white/20">
        
        <!-- Soft Background Particles -->
        <div class="absolute inset-0 pointer-events-none select-none overflow-hidden">
            <span class="absolute top-6 left-1/4 text-white/35 text-lg">✦</span>
            <span class="absolute top-10 left-1/2 text-white/25 text-xl">✧</span>
            <span class="absolute bottom-10 left-1/3 text-white/30 text-sm">✦</span>
            <span class="absolute top-1/3 right-1/4 text-white/35 text-2xl">✦</span>
            <span class="absolute bottom-6 right-1/3 text-white/25 text-base">✧</span>
        </div>

        <!-- Ambient Glow Circles -->
        <div class="absolute -bottom-24 -left-20 w-80 h-80 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
        <div class="absolute -top-24 -right-20 w-80 h-80 bg-sky-300/20 rounded-full blur-2xl pointer-events-none"></div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
            
            <!-- Left Content Column -->
            <div class="lg:col-span-8 flex flex-col justify-between space-y-5 text-white">
                
                <!-- Simple Top Greeting -->
                <div class="flex items-center gap-2">
                    <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-white/20 backdrop-blur-md text-white text-xs font-bold tracking-wide border border-white/30">
                        <span>👋</span> Halo, Selamat Datang
                    </span>
                </div>

                <!-- Main Name & Role Headline -->
                <div>
                    <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold tracking-tight text-white drop-shadow-sm font-sans">
                        {{ $portfolio['name'] }}
                    </h1>
                    <p class="mt-2 text-lg sm:text-2xl font-bold text-sky-100">
                        {{ $portfolio['role'] }}
                    </p>
                </div>

                <!-- Bio -->
                <p class="text-sm sm:text-base text-sky-50 leading-relaxed max-w-xl">
                    {{ $portfolio['tagline'] }}
                </p>

                <!-- CTA Actions -->
                <div class="pt-2 flex flex-wrap items-center gap-4">
                    <a 
                        href="#projects" 
                        class="inline-flex items-center gap-1.5 font-bold text-sm sm:text-base text-white hover:text-amber-200 underline underline-offset-8 decoration-2 decoration-white/60 hover:decoration-amber-300 transition"
                    >
                        <span>Lihat Proyek</span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>

                    <a 
                        href="#contact" 
                        class="px-5 py-2.5 rounded-full bg-white text-sky-700 hover:bg-sky-50 font-bold text-xs sm:text-sm shadow-md transition hover:-translate-y-0.5 hover:shadow-lg"
                    >
                        Hubungi Saya
                    </a>
                </div>

                <!-- Bottom Slider Indicator -->
                <div class="pt-4 flex items-center gap-2">
                    <span class="w-8 h-1.5 rounded-full bg-white shadow-sm"></span>
                    <span class="w-2.5 h-1.5 rounded-full bg-white/40"></span>
                    <span class="w-2.5 h-1.5 rounded-full bg-white/40"></span>
                    <span class="w-2.5 h-1.5 rounded-full bg-white/40"></span>
                </div>

            </div>

            <!-- Right Avatar/Illustration Frame -->
            <div class="lg:col-span-4 flex justify-center lg:justify-end">
                <div class="relative group">
                    <div class="absolute -inset-2 bg-gradient-to-tr from-sky-200 to-indigo-200 rounded-full blur-lg opacity-40 group-hover:opacity-70 transition duration-500"></div>
                    
                    <div class="relative w-44 h-44 sm:w-52 sm:h-52 md:w-60 md:h-60 rounded-full border-4 border-white/90 shadow-2xl overflow-hidden bg-gradient-to-b from-sky-300 via-sky-400 to-indigo-700 flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center text-center p-4 text-white">
                            <span class="text-5xl sm:text-6xl mb-1">👨‍💻</span>
                            <span class="text-xs sm:text-sm font-extrabold tracking-wider uppercase">Farhan P.</span>
                            <span class="text-[11px] text-sky-100 font-bold">Web Developer</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>
