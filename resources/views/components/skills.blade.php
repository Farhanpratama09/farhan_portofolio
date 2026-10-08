@props(['portfolio'])

@php
    $accentBg = [
        'citypop' => 'bg-citypop',
        'mint' => 'bg-mint',
        'tangerine' => 'bg-tangerine',
    ];
@endphp

<section id="skills" aria-labelledby="skills-title" class="border-y-2 border-ink bg-paper-2">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">

        <header class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-3 mb-8">
            <div>
                <p class="font-mono text-[11px] uppercase tracking-widest text-ink-soft">02 / Inventory</p>
                <h2 id="skills-title" class="mt-1 font-display font-bold text-3xl sm:text-4xl tracking-tight">Keahlian & Perkakas</h2>
            </div>
            <p class="max-w-sm text-sm leading-relaxed text-ink-soft">
                Perkakas yang paling sering saya pakai sehari-hari untuk membangun dan merawat aplikasi.
            </p>
        </header>

        <ul class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4">
            @foreach ($portfolio['skills'] as $skill)
                <li class="group bg-white border-2 border-ink shadow-hard flex flex-col">
                    <div class="flex items-center justify-between px-2.5 py-1.5 border-b-2 border-ink font-mono text-[10px] uppercase tracking-wider">
                        <span>Slot {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="w-2.5 h-2.5 border border-ink {{ $accentBg[$skill['accent']] ?? 'bg-citypop' }}" aria-hidden="true"></span>
                    </div>
                    <div class="p-3 flex-1 flex flex-col gap-3">
                        <span aria-hidden="true" class="grid place-items-center w-12 h-12 border-2 border-ink {{ $accentBg[$skill['accent']] ?? 'bg-citypop' }} font-display font-bold text-base transition-transform group-hover:-rotate-6">
                            {{ $skill['code'] }}
                        </span>
                        <div>
                            <h3 class="font-display font-bold text-[15px] leading-tight">{{ $skill['name'] }}</h3>
                            <p class="mt-0.5 font-mono text-[10px] uppercase tracking-wider text-ink-soft">{{ $skill['type'] }}</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

    </div>
</section>
