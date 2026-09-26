@props(['portfolio'])

<section id="about" class="py-20 bg-zinc-100/50 dark:bg-zinc-900/30 border-y border-zinc-200/60 dark:border-zinc-800/60 scroll-mt-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex flex-col items-center text-center mb-14">
            <h2 class="text-xs font-semibold uppercase tracking-wider text-indigo-600 dark:text-indigo-400 mb-2">Tentang Saya</h2>
            <p class="text-3xl sm:text-4xl font-bold tracking-tight text-zinc-900 dark:text-white">
                Membangun Solusi Digital dengan Passion & Presisi
            </p>
            <div class="w-12 h-1 bg-indigo-600 rounded-full mt-4"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            
            <!-- Left Narrative Column -->
            <div class="lg:col-span-7 space-y-5 text-zinc-600 dark:text-zinc-300 text-base sm:text-lg leading-relaxed">
                <p>
                    {{ $portfolio['about']['bio'] }}
                </p>
                <p>
                    Saya percaya bahwa kode yang baik bukan hanya tentang membuat fitur yang bekerja, tetapi juga tentang maintainability, arsitektur yang terstruktur, dan pengalaman pengguna (UX) yang mulus serta intuitif.
                </p>
                <div class="pt-2 flex flex-wrap items-center gap-3 text-sm text-zinc-500 dark:text-zinc-400 font-medium">
                    <span class="inline-flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Modern Web Stack
                    </span>
                    <span class="inline-flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Continuous Learning
                    </span>
                    <span class="inline-flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-indigo-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        AI Integration Enthusiast
                    </span>
                </div>
            </div>

            <!-- Right Highlights Cards Column -->
            <div class="lg:col-span-5 grid grid-cols-1 gap-4">
                @foreach ($portfolio['about']['highlights'] as $highlight)
                    <div class="p-5 sm:p-6 rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 shadow-sm hover:border-indigo-500/50 dark:hover:border-indigo-500/50 transition-colors">
                        <div class="flex items-start gap-4">
                            <div class="p-3 rounded-xl bg-indigo-50 dark:bg-indigo-950/50 text-indigo-600 dark:text-indigo-400 border border-indigo-100 dark:border-indigo-900/50 shrink-0">
                                @if ($highlight['icon'] === 'sparkles')
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                    </svg>
                                @elseif ($highlight['icon'] === 'code-bracket')
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                @else
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                @endif
                            </div>
                            <div>
                                <div class="text-xs font-semibold uppercase tracking-wider text-zinc-400 dark:text-zinc-500">
                                    {{ $highlight['title'] }}
                                </div>
                                <div class="mt-1 text-lg font-bold text-zinc-900 dark:text-white">
                                    {{ $highlight['value'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
