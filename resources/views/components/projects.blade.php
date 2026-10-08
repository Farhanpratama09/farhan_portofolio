@props(['portfolio'])

@php
    $projects = $portfolio['projects'];
    $featuredCount = 3;
    $categories = collect($projects)->pluck('category')->unique()->values();
    $coverBg = ['bg-citypop', 'bg-mint', 'bg-tangerine'];
    $isEmptyLink = fn ($url) => blank($url) || $url === '#';
@endphp

<section
    id="projects"
    aria-labelledby="projects-title"
    x-data="{
        filter: 'Semua',
        showAll: false,
        featured: {{ $featuredCount }},
        visible(category, index) {
            if (this.filter !== 'Semua') return this.filter === category;
            return this.showAll || index < this.featured;
        }
    }"
    class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16"
>
    <header class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-5 mb-8">
        <div>
            <div class="flex flex-wrap items-center gap-2.5">
                <p class="font-mono text-[11px] uppercase tracking-widest text-ink-soft">03 / Katalog</p>
                <button
                    type="button"
                    @click="$dispatch('open-exp-modal')"
                    class="press inline-flex items-center gap-1.5 px-2.5 py-1 bg-white border-2 border-ink shadow-hard-sm font-mono text-[11px] font-bold text-ink cursor-pointer hover:bg-paper-2"
                    title="Buka Jendela Riwayat Pengalaman"
                >
                    <span aria-hidden="true">💾</span>
                    <span>[SIDE_QUEST_LOG.EXE]</span>
                    <span class="px-1 py-0.2 bg-mint/40 border border-ink text-[9px] uppercase font-bold text-ink">
                        [{{ count($portfolio['experiences'] ?? config('portfolio.experiences', [])) }} LOG TERSEDIA]
                    </span>
                </button>
            </div>
            <h2 id="projects-title" class="mt-1 font-display font-bold text-3xl sm:text-4xl tracking-tight">Proyek Pilihan</h2>
        </div>

        <!-- Filter kategori -->
        <div role="group" aria-label="Filter kategori proyek" class="flex flex-wrap gap-2">
            @foreach (collect(['Semua'])->merge($categories) as $category)
                <button
                    type="button"
                    @click="filter = @js($category)"
                    :class="filter === @js($category) ? 'bg-ink text-paper' : 'bg-white hover:bg-paper-2'"
                    :aria-pressed="(filter === @js($category)).toString()"
                    class="px-3 py-1.5 border-2 border-ink font-mono text-[11px] uppercase tracking-wider transition-[color,background-color,translate] duration-100 active:translate-x-[2px] active:translate-y-[2px] cursor-pointer"
                >
                    {{ $category }}
                </button>
            @endforeach
        </div>
    </header>

    <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">
        @foreach ($projects as $project)
            <li
                x-show="visible(@js($project['category']), {{ $loop->index }})"
                @if ($loop->index >= $featuredCount) x-cloak @endif
                x-transition.opacity.duration.200ms
                class="bg-white border-2 border-ink shadow-hard flex flex-col transition-all duration-150 motion-safe:hover:-translate-y-1 hover:shadow-hard-lg"
            >
                <article class="flex flex-col h-full">
                    <!-- Cover -->
                    <div class="relative h-36 border-b-2 border-ink {{ $coverBg[$loop->index % 3] }} overflow-hidden">
                        <div class="absolute inset-0 halftone"></div>
                        <div class="absolute top-2.5 left-2.5 right-2.5 flex items-center justify-between font-mono text-[10px] uppercase tracking-wider">
                            <span class="px-1.5 py-0.5 bg-white border-2 border-ink">No.{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            <span class="px-1.5 py-0.5 bg-white border-2 border-ink">{{ $project['category'] }}</span>
                        </div>
                        <span aria-hidden="true" class="absolute bottom-1 left-3 font-display font-bold text-5xl leading-none tracking-tighter text-ink/85">
                            {{ \Illuminate\Support\Str::of($project['title'])->explode(' ')->take(2)->map(fn ($w) => mb_substr($w, 0, 1))->implode('') }}
                        </span>
                    </div>

                    <!-- Isi -->
                    <div class="p-4 sm:p-5 flex-1 flex flex-col gap-3">
                        <h3 class="font-display font-bold text-lg leading-snug">{{ $project['title'] }}</h3>
                        <p class="text-sm leading-relaxed text-ink-soft flex-1">{{ $project['desc'] ?? $project['description'] ?? '' }}</p>

                        <ul class="flex flex-wrap gap-1.5" aria-label="Teknologi">
                            @foreach ($project['tech'] ?? $project['tags'] ?? [] as $tag)
                                <li class="px-1.5 py-0.5 border border-ink bg-paper font-mono text-[10px] uppercase tracking-wide">{{ $tag }}</li>
                            @endforeach
                        </ul>

                        <!-- Aksi -->
                        @if (($project['demo'] ?? '') === '#contact')
                            <div class="pt-1">
                                <a href="#contact"
                                   class="press flex items-center justify-center gap-1.5 w-full px-3 py-2 border-2 border-ink bg-citypop shadow-hard-sm font-mono text-[11px] uppercase tracking-wider font-bold">
                                    <span>Mulai Diskusi</span>
                                    <span aria-hidden="true">💬</span>
                                </a>
                            </div>
                        @else
                            <div class="grid grid-cols-2 gap-2 pt-1">
                                @if ($isEmptyLink($project['github'] ?? null))
                                    <span aria-disabled="true" class="inline-flex items-center justify-center px-3 py-2 border-2 border-dashed border-ink/40 text-ink/40 font-mono text-[11px] uppercase tracking-wider cursor-not-allowed">
                                        Kode Privat
                                    </span>
                                @else
                                    <a href="{{ $project['github'] }}" target="_blank" rel="noopener noreferrer"
                                       class="inline-flex items-center justify-center px-3 py-2 border-2 border-ink bg-white hover:bg-paper-2 font-mono text-[11px] uppercase tracking-wider transition-[background-color,translate] duration-100 active:translate-x-[2px] active:translate-y-[2px]">
                                        [ Kode ]
                                    </a>
                                @endif

                                @if ($isEmptyLink($project['demo'] ?? null))
                                    <span aria-disabled="true" title="Demo belum tersedia" class="inline-flex items-center justify-center px-3 py-2 border-2 border-dashed border-ink/40 bg-paper-2 text-ink/45 font-mono text-[11px] uppercase tracking-wider cursor-not-allowed">
                                        Segera Hadir
                                    </span>
                                @else
                                    <a href="{{ $project['demo'] }}" target="_blank" rel="noopener noreferrer"
                                       class="press inline-flex items-center justify-center gap-1 px-3 py-2 border-2 border-ink bg-ink text-paper shadow-hard-sm font-mono text-[11px] uppercase tracking-wider">
                                        Demo <span aria-hidden="true">↗</span>
                                    </a>
                                @endif
                            </div>
                        @endif
                    </div>
                </article>
            </li>
        @endforeach
    </ul>

    @if (count($projects) > $featuredCount)
        <div class="mt-8 flex justify-center" x-show="filter === 'Semua'">
            <button
                type="button"
                @click="showAll = !showAll"
                :aria-expanded="showAll.toString()"
                class="press inline-flex items-center gap-2 px-5 py-2.5 bg-white border-2 border-ink shadow-hard font-mono text-xs uppercase tracking-wider cursor-pointer"
            >
                <span x-text="showAll ? 'Tampilkan Lebih Sedikit' : 'Lihat Semua ({{ count($projects) }})'">Lihat Semua ({{ count($projects) }})</span>
                <span aria-hidden="true" x-text="showAll ? '↑' : '↓'">↓</span>
            </button>
        </div>
    @endif
</section>
