@props(['portfolio'])

<footer class="py-8 border-t border-sky-100 dark:border-zinc-800/80 bg-white/50 dark:bg-zinc-950/50 mt-auto">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            
            <!-- Copyright text -->
            <p class="text-xs text-slate-500 dark:text-zinc-400 text-center sm:text-left">
                &copy; {{ date('Y') }} <span class="font-extrabold text-slate-800 dark:text-zinc-200">{{ $portfolio['name'] }}</span>. All rights reserved.
            </p>

            <!-- Tech acknowledgement & Back to Top -->
            <div class="flex items-center gap-4 text-xs text-slate-500 dark:text-zinc-400 font-medium">
                <span class="hidden sm:inline">Built with Laravel 13, Tailwind CSS & Alpine.js</span>
                
                <a 
                    href="#" 
                    class="p-2 rounded-xl bg-white dark:bg-zinc-900 border border-sky-100 dark:border-zinc-800 hover:bg-sky-50 dark:hover:bg-zinc-800 text-slate-700 dark:text-zinc-300 transition hover:scale-110 shadow-sm"
                    title="Kembali ke atas"
                >
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                </a>
            </div>

        </div>
    </div>
</footer>
