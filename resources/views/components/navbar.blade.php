@props(['portfolio'])

@php
    $sectionIds = collect($portfolio['nav'])->pluck('id')->values();
@endphp

<header
    x-data="{
        open: false,
        active: 'hero',
        time: '--:--',
        sections: @js($sectionIds),
        tick() {
            this.time = new Intl.DateTimeFormat('id-ID', {
                timeZone: @js($portfolio['timezone'] ?? 'Asia/Jakarta'),
                hour: '2-digit', minute: '2-digit', hour12: false,
            }).format(new Date()).replace('.', ':');
        },
        spy() {
            for (const id of this.sections) {
                const el = document.getElementById(id);
                if (!el) continue;
                const r = el.getBoundingClientRect();
                if (r.top <= 140 && r.bottom >= 140) { this.active = id; break; }
            }
        },
        init() {
            this.tick();
            setInterval(() => this.tick(), 15000);
            this.spy();
            window.addEventListener('scroll', () => this.spy(), { passive: true });
        }
    }"
    class="sticky top-0 z-50 w-full border-b-2 border-ink bg-paper"
>
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-14 gap-4">

            <!-- Brand -->
            <a href="#hero" class="flex items-center gap-2.5 shrink-0" aria-label="{{ $portfolio['name'] }} — kembali ke atas">
                <span class="w-7 h-7 flex items-center justify-center bg-sky-400 text-[#1E2229] font-mono font-bold text-xs border border-[#1E2229] shadow-[2px_2px_0_#1E2229] rounded">
                    FP
                </span>
                <span class="font-display font-bold text-[15px] tracking-tight leading-none">
                    {{ $portfolio['name'] }}
                </span>
            </a>

            <!-- Desktop Nav -->
            <nav aria-label="Navigasi utama" class="hidden md:flex items-stretch h-full">
                @foreach ($portfolio['nav'] as $item)
                    <a
                        href="{{ $item['url'] }}"
                        @click="active = '{{ $item['id'] }}'; if ({{ !empty($item['is_modal']) ? 'true' : 'false' }}) { $dispatch('open-exp-modal'); }"
                        :class="active === '{{ $item['id'] }}' ? 'bg-ink text-paper' : 'text-ink hover:bg-paper-2'"
                        :aria-current="active === '{{ $item['id'] }}' ? 'true' : null"
                        class="flex items-center px-4 border-l-2 border-ink last:border-r-2 font-mono text-[12px] uppercase tracking-wider transition-colors"
                    >
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </nav>

            <!-- System Status -->
            <div class="flex items-center gap-3">
                <div class="hidden sm:flex items-center gap-3 font-mono text-[11px] uppercase tracking-wider">
                    @if ($portfolio['available'] ?? false)
                        <span class="flex items-center gap-1.5">
                            <span class="led w-2 h-2 bg-mint border border-ink" aria-hidden="true"></span>
                            Online
                        </span>
                    @endif
                    <span class="px-2 py-0.5 border-2 border-ink bg-white tabular-nums">
                        <time x-text="time + ' WIB'">--:-- WIB</time>
                    </span>
                </div>

                <!-- Mobile Toggle -->
                <button
                    type="button"
                    @click="open = !open"
                    :aria-expanded="open.toString()"
                    aria-controls="mobile-nav"
                    :aria-label="open ? 'Tutup menu navigasi' : 'Buka menu navigasi'"
                    class="md:hidden grid place-items-center w-9 h-9 border-2 border-ink bg-white shadow-hard-sm press"
                >
                    <svg x-show="!open" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="square" d="M4 7h16M4 12h16M4 17h16"/></svg>
                    <svg x-show="open" x-cloak class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="square" d="M6 6l12 12M18 6L6 18"/></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Nav -->
    <nav
        id="mobile-nav"
        aria-label="Navigasi mobile"
        x-show="open"
        x-cloak
        @click.outside="open = false"
        x-transition.opacity.duration.150ms
        class="md:hidden border-t-2 border-ink bg-paper"
    >
        @foreach ($portfolio['nav'] as $item)
            <a
                href="{{ $item['url'] }}"
                @click="open = false; active = '{{ $item['id'] }}'; if ({{ !empty($item['is_modal']) ? 'true' : 'false' }}) { $dispatch('open-exp-modal'); }"
                :class="active === '{{ $item['id'] }}' ? 'bg-ink text-paper' : 'hover:bg-paper-2'"
                class="flex items-center justify-between px-5 py-3 border-b border-ink/20 font-mono text-xs uppercase tracking-wider"
            >
                <span>{{ $item['label'] }}</span>
                <span aria-hidden="true">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
            </a>
        @endforeach
        <div class="flex items-center justify-between px-5 py-3 font-mono text-[11px] uppercase tracking-wider">
            <span class="flex items-center gap-1.5">
                <span class="w-2 h-2 bg-mint border border-ink" aria-hidden="true"></span> Online
            </span>
            <time x-text="time + ' WIB'">--:-- WIB</time>
        </div>
    </nav>
</header>
