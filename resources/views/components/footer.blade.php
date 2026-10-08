@props(['portfolio'])

<footer class="mt-auto border-t-2 border-ink bg-ink text-paper">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="flex flex-col sm:flex-row items-center justify-between gap-3 font-mono text-[11px] uppercase tracking-wider">
            <p>&copy; {{ date('Y') }} {{ $portfolio['name'] }}</p>
            <p class="text-paper/60 text-center">Dibuat dengan Laravel, Tailwind CSS &amp; Alpine.js</p>
            <a href="#hero" class="inline-flex items-center gap-1.5 px-2 py-1 border-2 border-paper hover:bg-paper hover:text-ink transition-colors">
                Ke atas <span aria-hidden="true">↑</span>
            </a>
        </div>
    </div>
</footer>
