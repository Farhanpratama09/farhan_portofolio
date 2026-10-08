@props(['portfolio'])

@php
    $experiences = $portfolio['experiences'] ?? config('portfolio.experiences', []);
@endphp

@if (!empty($experiences))
<section id="experience" aria-labelledby="experience-title" class="border-t-2 border-ink bg-paper">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">

        <header class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-3 mb-8">
            <div>
                <p class="font-mono text-[11px] uppercase tracking-widest text-ink-soft">04 / Rekam Jejak</p>
                <h2 id="experience-title" class="mt-1 font-display font-bold text-3xl sm:text-4xl tracking-tight">Pengalaman Kerja</h2>
            </div>
            <p class="max-w-sm text-sm leading-relaxed text-ink-soft">
                Riwayat pengalaman operasional, pendataan lapangan, dan pengelolaan logistik dengan akurasi dan integritas kerja tinggi.
            </p>
        </header>

        <div class="space-y-6">
            @foreach ($experiences as $exp)
                <article class="bg-white border-2 border-ink shadow-hard-lg overflow-hidden">
                    <!-- Top Status Bar Kartu Pengalaman -->
                    <div class="flex flex-wrap items-center justify-between gap-2 px-4 py-2.5 border-b-2 border-ink bg-paper-2 font-mono text-[11px] uppercase">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 border border-ink {{ $exp['status'] === 'Selesai' ? 'bg-mint' : 'bg-slate-300' }}" aria-hidden="true"></span>
                            <span class="font-bold text-ink">{{ $exp['company'] }}</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="text-ink-soft">{{ $exp['period'] }}</span>
                            @if ($exp['status'] === 'Selesai')
                                <span class="px-2 py-0.5 border border-ink bg-paper text-ink font-bold text-[10px] tracking-wider">
                                    SELESAI
                                </span>
                            @else
                                <span class="px-2 py-0.5 border border-ink bg-slate-200 text-ink font-bold text-[10px] tracking-wider">
                                    NONAKTIF
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- Isi Pengalaman -->
                    <div class="p-5 sm:p-6 space-y-4">
                        <div>
                            <h3 class="font-display font-bold text-xl sm:text-2xl text-ink leading-snug">
                                {{ $exp['role'] }}
                            </h3>
                            <p class="mt-2 text-sm sm:text-[15px] leading-relaxed text-ink-soft">
                                {{ $exp['desc'] }}
                            </p>
                        </div>

                        @if (!empty($exp['highlights']))
                            <div class="pt-2 border-t border-ink/15">
                                <p class="font-mono text-[10px] uppercase tracking-wider text-ink-soft mb-2.5">
                                    Sorotan Tanggung Jawab &amp; Kontribusi:
                                </p>
                                <ul class="space-y-1.5 text-sm sm:text-[14px] text-ink" aria-label="Sorotan tanggung jawab">
                                    @foreach ($exp['highlights'] as $highlight)
                                        <li class="flex items-start gap-2.5">
                                            <span class="font-mono text-citypop font-bold text-sm shrink-0" aria-hidden="true">■</span>
                                            <span class="leading-relaxed">{{ $highlight }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>

    </div>
</section>
@endif
