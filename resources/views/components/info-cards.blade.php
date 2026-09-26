@props(['portfolio'])

<div id="info-cards" class="grid grid-cols-1 sm:grid-cols-12 gap-4">
    
    <!-- Sub-Column Left: 2 Chibi / Sticker Widgets with Close (✕) (Inspirasi Image 3) -->
    <div class="sm:col-span-4 flex flex-row sm:flex-col gap-3">
        @foreach ($portfolio['stickers'] as $sticker)
            <div 
                x-data="{ visible: true }" 
                x-show="visible" 
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-75"
                class="relative flex-1 flex flex-col justify-between p-4 rounded-3xl bg-gradient-to-br {{ $sticker['bg_gradient'] }} text-white shadow-md border border-white/20 overflow-hidden group hover:scale-[1.03] transition-transform"
            >
                <!-- Floating Close Button (✕) on Top Right of Sticker (Inspirasi Image 3) -->
                <button 
                    @click="visible = false" 
                    type="button" 
                    class="absolute top-2.5 right-2.5 w-6 h-6 rounded-full bg-white/90 dark:bg-zinc-900/90 text-slate-700 dark:text-zinc-200 hover:bg-white text-xs font-bold flex items-center justify-center shadow-sm transition hover:scale-110 cursor-pointer"
                    title="Dismiss"
                >
                    ✕
                </button>

                <!-- Sticker Icon Graphic -->
                <div class="text-3xl sm:text-4xl my-1 select-none">
                    {{ $sticker['emoji'] }}
                </div>

                <!-- Sticker Text -->
                <div>
                    <h3 class="text-xs sm:text-sm font-extrabold text-white leading-tight">
                        {{ $sticker['title'] }}
                    </h3>
                    <span class="text-[10px] text-white/80 font-medium">
                        {{ $sticker['tag'] }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Sub-Column Right: 3 Horizontal White Info Cards (Inspirasi Image 3) -->
    <div class="sm:col-span-8 flex flex-col space-y-3 justify-between">
        @foreach ($portfolio['info_cards'] as $card)
            <div class="group flex items-start gap-3.5 p-3.5 sm:p-4 rounded-2xl bg-white dark:bg-zinc-900 border border-sky-100 dark:border-zinc-800 shadow-sm hover:shadow-md hover:border-sky-300 dark:hover:border-sky-800 hover:-translate-y-0.5 transition-all duration-200">
                
                <!-- Icon Box Rounded on the Left -->
                <div class="p-2.5 rounded-2xl {{ $card['icon_color'] }} shrink-0 group-hover:scale-110 transition-transform">
                    @if ($card['icon'] === 'code-bracket')
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    @elseif ($card['icon'] === 'chart-bar')
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    @else
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    @endif
                </div>

                <!-- Text Content -->
                <div class="space-y-0.5">
                    <h3 class="text-xs sm:text-sm font-extrabold text-slate-800 dark:text-white group-hover:text-sky-600 dark:group-hover:text-sky-400 transition-colors">
                        {{ $card['title'] }}
                    </h3>
                    <p class="text-[11px] sm:text-xs text-slate-500 dark:text-zinc-400 leading-relaxed">
                        {{ $card['description'] }}
                    </p>
                </div>

            </div>
        @endforeach
    </div>

</div>
