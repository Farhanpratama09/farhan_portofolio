@props(['portfolio'])

<section id="skills" class="py-20 scroll-mt-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex flex-col items-center text-center mb-16">
            <h2 class="text-xs font-semibold uppercase tracking-wider text-indigo-600 dark:text-indigo-400 mb-2">Tech Stack & Keahlian</h2>
            <p class="text-3xl sm:text-4xl font-bold tracking-tight text-zinc-900 dark:text-white">
                Teknologi yang Biasa Saya Gunakan
            </p>
            <div class="w-12 h-1 bg-indigo-600 rounded-full mt-4"></div>
        </div>

        <!-- Skills Categories Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($portfolio['skills'] as $category => $items)
                <div class="flex flex-col rounded-2xl bg-white dark:bg-zinc-900/90 border border-zinc-200 dark:border-zinc-800 p-6 shadow-sm hover:shadow-md transition-shadow">
                    <!-- Category Header -->
                    <div class="flex items-center gap-3 pb-4 mb-5 border-b border-zinc-100 dark:border-zinc-800/80">
                        <div class="w-2.5 h-2.5 rounded-full bg-indigo-600"></div>
                        <h3 class="text-base font-bold text-zinc-900 dark:text-white tracking-tight">
                            {{ $category }}
                        </h3>
                    </div>

                    <!-- Skills List / Grid inside Category -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-1 gap-3">
                        @foreach ($items as $skill)
                            <div class="group flex items-center justify-between p-3 rounded-xl bg-zinc-50 dark:bg-zinc-800/50 hover:bg-indigo-50/50 dark:hover:bg-indigo-950/30 border border-zinc-200/60 dark:border-zinc-700/40 hover:border-indigo-200 dark:hover:border-indigo-800/60 transition-all duration-200">
                                <div class="flex items-center gap-3">
                                    <!-- Bullet indicator -->
                                    <span class="w-2 h-2 rounded-full bg-zinc-400 dark:bg-zinc-600 group-hover:bg-indigo-600 group-hover:scale-125 transition-all"></span>
                                    <span class="text-sm font-semibold text-zinc-800 dark:text-zinc-200 group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                        {{ $skill['name'] }}
                                    </span>
                                </div>
                                <span class="text-xs px-2 py-0.5 rounded-md bg-white dark:bg-zinc-900 text-zinc-500 dark:text-zinc-400 font-medium border border-zinc-200/80 dark:border-zinc-800">
                                    {{ $skill['level'] }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
