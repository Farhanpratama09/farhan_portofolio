@props(['portfolio'])

<footer class="py-8 border-t border-zinc-200 dark:border-zinc-800 bg-white dark:bg-zinc-950 mt-auto">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
            
            <!-- Copyright text -->
            <p class="text-xs text-zinc-500 dark:text-zinc-400 text-center sm:text-left">
                &copy; {{ date('Y') }} <span class="font-semibold text-zinc-800 dark:text-zinc-200">{{ $portfolio['name'] }}</span>. All rights reserved.
            </p>

            <!-- Tech acknowledgement & Back to Top -->
            <div class="flex items-center gap-4 text-xs text-zinc-500 dark:text-zinc-400">
                <span class="hidden sm:inline">Built with Laravel 13, Tailwind CSS & Alpine.js</span>
                
                <a 
                    href="#" 
                    class="p-2 rounded-lg bg-zinc-100 dark:bg-zinc-900 hover:bg-zinc-200 dark:hover:bg-zinc-800 text-zinc-700 dark:text-zinc-300 transition"
                    title="Kembali ke atas"
                >
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                </a>
            </div>

        </div>
    </div>
</footer>
