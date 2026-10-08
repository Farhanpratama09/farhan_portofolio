@props(['portfolio'])

@php
    $experiences = $portfolio['experiences'] ?? config('portfolio.experiences', []);
@endphp

@if (!empty($experiences))
<div
    id="experience"
    x-data="{ openModal: false }"
    @open-exp-modal.window="openModal = true"
    @keydown.escape.window="openModal = false"
    class="relative z-[100]"
    role="region"
    aria-label="Jendela Riwayat Pengalaman Kerja"
>
    <!-- Modal Backdrop -->
    <div
        x-show="openModal"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-[#1E2229]/75 backdrop-blur-xs flex items-center justify-center p-3 sm:p-6 overflow-y-auto"
        @click.self="openModal = false"
        aria-hidden="true"
    >
        <!-- Modal Window (Retro OS Program Window) -->
        <div
            x-show="openModal"
            x-cloak
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95 translate-y-3"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-3"
            class="relative w-full max-w-3xl bg-paper border-2 border-ink shadow-hard-lg flex flex-col my-auto max-h-[90vh] overflow-hidden"
            role="dialog"
            aria-modal="true"
            aria-labelledby="exp-modal-title"
        >
            <!-- Window Title Bar -->
            <div class="flex items-center justify-between px-3 sm:px-4 py-2 border-b-2 border-ink bg-paper-2 select-none shrink-0">
                <div class="flex items-center gap-2 truncate pr-2">
                    <span class="w-2.5 h-2.5 bg-mint border border-ink" aria-hidden="true"></span>
                    <h2 id="exp-modal-title" class="font-mono font-bold text-xs sm:text-[13px] tracking-wider text-ink truncate">
                        SYSTEM://SIDE_QUESTS_AND_WORK_HISTORY.LOG
                    </h2>
                </div>
                
                <!-- Close Button -->
                <button
                    type="button"
                    @click="openModal = false"
                    class="press grid place-items-center w-7 h-7 bg-white hover:bg-rose-100 border-2 border-ink shadow-hard-sm font-mono font-bold text-xs text-ink cursor-pointer shrink-0"
                    aria-label="Tutup Jendela"
                    title="Tutup (Esc)"
                >
                    [X]
                </button>
            </div>

            <!-- Sub Header / Status Bar Info -->
            <div class="flex flex-wrap items-center justify-between gap-2 px-4 py-1.5 border-b-2 border-ink bg-white font-mono text-[10px] sm:text-[11px] uppercase tracking-wider text-ink-soft shrink-0">
                <div class="flex items-center gap-2">
                    <span class="font-bold text-ink">FOLDER: RECORD_ARCHIVE</span>
                    <span>·</span>
                    <span>TOTAL: {{ count($experiences) }} ITEM</span>
                </div>
                <div class="hidden sm:flex items-center gap-2">
                    <span>MODE: READ_ONLY</span>
                    <span>·</span>
                    <span>TEKAN [ESC] UNTUK KELUAR</span>
                </div>
            </div>

            <!-- Window Scrollable Body -->
            <div class="p-4 sm:p-6 overflow-y-auto space-y-6">
                <!-- Description Box -->
                <div class="p-3 border-2 border-dashed border-ink/40 bg-white/70 font-mono text-xs text-ink-soft leading-relaxed">
                    > Riwayat pengalaman kerja nyata &amp; operasional lapangan. Berfokus pada integritas data, ketepatan metodologi, serta ketahanan kerja dalam lingkungan fast-paced.
                </div>

                <!-- Experience Items List -->
                <div class="space-y-5">
                    @foreach ($experiences as $exp)
                        <article class="bg-white border-2 border-ink shadow-hard overflow-hidden">
                            <!-- Top Status Bar Kartu Pengalaman -->
                            <div class="flex flex-wrap items-center justify-between gap-2 px-3.5 py-2 border-b-2 border-ink bg-paper-2 font-mono text-[11px] uppercase">
                                <div class="flex items-center gap-2">
                                    <span class="w-2.5 h-2.5 border border-ink {{ $exp['status'] === 'Selesai' ? 'bg-mint' : 'bg-slate-300' }}" aria-hidden="true"></span>
                                    <span class="font-bold text-ink">{{ $exp['company'] }}</span>
                                </div>
                                <div class="flex items-center gap-2.5">
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
                            <div class="p-4 sm:p-5 space-y-3.5">
                                <div>
                                    <h3 class="font-display font-bold text-lg sm:text-xl text-ink leading-snug">
                                        {{ $exp['role'] }}
                                    </h3>
                                    <p class="mt-1.5 text-xs sm:text-sm leading-relaxed text-ink-soft">
                                        {{ $exp['desc'] }}
                                    </p>
                                </div>

                                @if (!empty($exp['highlights']))
                                    <div class="pt-2 border-t border-ink/15">
                                        <p class="font-mono text-[10px] uppercase tracking-wider text-ink-soft mb-2">
                                            Sorotan Tanggung Jawab &amp; Kontribusi:
                                        </p>
                                        <ul class="space-y-1.5 text-xs sm:text-sm text-ink" aria-label="Sorotan tanggung jawab">
                                            @foreach ($exp['highlights'] as $highlight)
                                                <li class="flex items-start gap-2">
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

            <!-- Window Footer Bar -->
            <div class="flex items-center justify-between px-4 py-2 border-t-2 border-ink bg-paper-2 font-mono text-[11px] uppercase tracking-wider shrink-0">
                <span class="text-ink-soft">STATUS: OK // VERIFIED</span>
                <button
                    type="button"
                    @click="openModal = false"
                    class="press px-3 py-1 bg-white border-2 border-ink shadow-hard-sm font-bold text-xs text-ink cursor-pointer hover:bg-paper"
                >
                    TUTUP LOG [ESC]
                </button>
            </div>
        </div>
    </div>
</div>
@endif
