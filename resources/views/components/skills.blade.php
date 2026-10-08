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
                <li class="group bg-white border-2 border-ink shadow-hard flex flex-col transition-all duration-150 motion-safe:hover:-translate-y-1 hover:shadow-hard-lg">
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

            <!-- Slot Terkunci (Locked Item / RPG Inventory) -->
            <li class="col-span-2 sm:col-span-3 lg:col-span-6 locked-hatch border-2 border-dashed border-ink flex flex-col transition-all duration-150 motion-safe:hover:-translate-y-1 hover:shadow-hard">
                <div class="flex flex-wrap items-center justify-between gap-2 px-3 py-1.5 border-b-2 border-dashed border-ink font-mono text-[10px] uppercase tracking-wider">
                    <span>Slot {{ str_pad(count($portfolio['skills']) + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    <span class="px-1.5 py-0.5 bg-white border border-ink font-bold">[ 🔒 LOCKED // POTENSI_TERKUNCI ]</span>
                </div>
                <div class="p-4 sm:p-5 flex flex-col md:flex-row md:items-center gap-4">
                    <span aria-hidden="true" class="grid place-items-center w-12 h-12 shrink-0 border-2 border-dashed border-ink bg-white/70 font-display font-bold text-lg text-ink/60">
                        ?
                    </span>
                    <div class="flex-1 min-w-0">
                        <h3 class="font-mono font-bold text-sm sm:text-[15px] tracking-wide text-ink/80 break-words">??? // EXPANDABLE_TECH_STACK</h3>
                        <p class="mt-1 text-[13px] sm:text-sm leading-relaxed text-ink-soft max-w-2xl">
                            Slot keahlian ini memerlukan party baru untuk terbuka. Rekrut Farhan ke dalam tim Anda untuk membuka adaptabilitas penuh, eksplorasi stack baru, dan kapasitas kerja tingkat lanjut.
                        </p>
                    </div>
                    <a href="#contact" class="press self-start md:self-center shrink-0 inline-flex items-center justify-center px-3 py-2 bg-white border-2 border-ink shadow-hard-sm font-mono font-bold text-[11px] uppercase tracking-wider">
                        [ Unlock via Recruitment ]
                    </a>
                </div>
            </li>
        </ul>

    </div>
</section>
