@props(['portfolio'])

@php
    $about = $portfolio['about'];
    $photoPath = $portfolio['photo'] ?? null;
    $hasPhoto = $photoPath && file_exists(public_path($photoPath));
@endphp

<section id="hero" aria-labelledby="hero-title" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 sm:pt-14 pb-12 sm:pb-16">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">

        <!-- Kartu Karakter -->
        <div class="lg:col-span-5 flex justify-center lg:justify-start">
            <figure class="relative w-full max-w-[340px] -rotate-[1.5deg]">
                <!-- Tape sudut -->
                <span aria-hidden="true" class="absolute -top-3 -left-5 z-10 w-24 h-7 bg-tape/90 border border-ink/15 -rotate-[24deg]"></span>
                <span aria-hidden="true" class="absolute -top-3 -right-5 z-10 w-24 h-7 bg-tape/90 border border-ink/15 rotate-[22deg]"></span>

                <div class="bg-white border-2 border-ink shadow-hard-lg">
                    <!-- Header kartu -->
                    <div class="flex items-center justify-between px-3 py-2 border-b-2 border-ink bg-paper-2 font-mono text-[10px] uppercase tracking-widest">
                        <span>Player Card</span>
                        <span>No. 001</span>
                    </div>

                    <!-- Area foto: ganti dengan file public/{{ $photoPath }} -->
                    <div class="relative aspect-[4/5] m-3 border-2 border-ink overflow-hidden bg-paper-2">
                        @if ($hasPhoto)
                            <img
                                src="{{ asset($photoPath) }}"
                                alt="Foto {{ $portfolio['name'] }}"
                                width="640" height="800"
                                class="w-full h-full object-cover"
                            >
                        @else
                            <div class="absolute inset-0 hatch"></div>
                            <div class="absolute inset-0 grid place-items-center">
                                <span class="font-display font-bold text-[7rem] leading-none tracking-tighter text-ink select-none">
                                    {{ $portfolio['initials'] ?? 'FP' }}
                                </span>
                            </div>
                            <span class="absolute bottom-2 left-2 px-1.5 py-0.5 bg-white border border-ink font-mono text-[9px] uppercase tracking-wider">
                                img: {{ $photoPath }}
                            </span>
                        @endif

                        @if ($portfolio['available'] ?? false)
                            <!-- Stempel ketersediaan -->
                            <span class="absolute top-3 right-3 rotate-[8deg] px-2 py-1 border-2 border-tangerine text-tangerine bg-white/85 font-mono font-bold text-[10px] uppercase tracking-widest">
                                Open to Work
                            </span>
                        @endif
                    </div>

                    <!-- Statistik kartu -->
                    <figcaption class="px-3 pb-3">
                        <p class="font-display font-bold text-lg leading-tight">{{ $portfolio['name'] }}</p>
                        <dl class="mt-2 grid grid-cols-3 border-2 border-ink font-mono text-[10px] uppercase">
                            <div class="px-2 py-1.5 border-r-2 border-ink">
                                <dt class="text-ink-soft">Class</dt>
                                <dd class="font-bold truncate">Web Dev</dd>
                            </div>
                            <div class="px-2 py-1.5 border-r-2 border-ink">
                                <dt class="text-ink-soft">Main</dt>
                                <dd class="font-bold">Laravel</dd>
                            </div>
                            <div class="px-2 py-1.5">
                                <dt class="text-ink-soft">Base</dt>
                                <dd class="font-bold truncate">{{ $portfolio['location'] ?? 'Indonesia' }}</dd>
                            </div>
                        </dl>
                    </figcaption>
                </div>
            </figure>
        </div>

        <!-- Perkenalan -->
        <div class="lg:col-span-7 space-y-6">
            <!-- Badge status taktis -->
            <div class="flex flex-wrap gap-2 font-mono text-[11px] uppercase tracking-wider">
                <span class="inline-flex items-center gap-1.5 px-2 py-1 border-2 border-ink bg-white">
                    <span class="w-2 h-2 bg-mint border border-ink" aria-hidden="true"></span>
                    status: tersedia
                </span>
                <span class="px-2 py-1 border-2 border-ink bg-white">role: {{ strtolower($portfolio['role']) }}</span>
                <span class="px-2 py-1 border-2 border-ink bg-citypop">focus: laravel + bars</span>
            </div>

            <div class="space-y-3">
                <h1 id="hero-title" class="font-display font-bold text-4xl sm:text-5xl lg:text-[3.5rem] leading-[1.05] tracking-tight">
                    {{ $about['greeting'] }}
                    <span class="block text-ink-soft">{{ $portfolio['role'] }} yang suka hal rapi.</span>
                </h1>
                <p class="max-w-xl text-base sm:text-[17px] leading-relaxed text-ink-soft">
                    {{ $about['bio'] }}
                </p>
            </div>

            <!-- CTA -->
            <div class="flex flex-wrap gap-3">
                <a href="#projects" class="press inline-flex items-center gap-2 px-5 py-2.5 bg-citypop border-2 border-ink shadow-hard font-display font-bold text-sm">
                    Lihat Proyek
                    <span aria-hidden="true">→</span>
                </a>
                <a href="#contact" class="press inline-flex items-center gap-2 px-5 py-2.5 bg-white border-2 border-ink shadow-hard font-display font-bold text-sm">
                    Hubungi Saya
                </a>
                @if (!empty($portfolio['cv_url'] ?? config('portfolio.cv_url')))
                    <a href="{{ asset($portfolio['cv_url'] ?? config('portfolio.cv_url')) }}" download class="press inline-flex items-center gap-2 px-5 py-2.5 bg-paper-2 border-2 border-ink shadow-hard font-mono font-bold text-sm">
                        <span>📄</span>
                        <span>UNDUH CV</span>
                    </a>
                @endif
            </div>

            <!-- Fokus kerja (esensi About) -->
            <div class="grid grid-cols-1 sm:grid-cols-3 border-2 border-ink bg-white">
                <h2 class="sr-only">Fokus kerja</h2>
                @foreach ($about['pillars'] as $pillar)
                    <div class="p-4 {{ ! $loop->last ? 'border-b-2 sm:border-b-0 sm:border-r-2 border-ink' : '' }}">
                        <span class="font-mono text-[11px] text-ink-soft">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <h3 class="mt-1 font-display font-bold text-[15px] leading-snug">{{ $pillar['title'] }}</h3>
                        <p class="mt-1 text-[13px] leading-relaxed text-ink-soft">{{ $pillar['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
