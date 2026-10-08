@props(['portfolio'])

@php
    $inputClass = 'w-full px-3 py-2.5 bg-paper border-2 border-ink text-ink text-sm placeholder:text-ink/40 focus:outline-none focus:bg-white focus:ring-2 focus:ring-citypop focus:ring-offset-2 focus:ring-offset-white transition-colors';
    $labelClass = 'block mb-1.5 font-mono text-[11px] uppercase tracking-wider';
@endphp

<section id="contact" aria-labelledby="contact-title" class="border-t-2 border-ink bg-paper-2">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

            <!-- Kiri: Ajakan kolaborasi -->
            <div class="lg:col-span-5 space-y-5">
                <p class="font-mono text-[11px] uppercase tracking-widest text-ink-soft">04 / Korespondensi</p>
                <h2 id="contact-title" class="font-display font-bold text-3xl sm:text-4xl tracking-tight">
                    Mari Terhubung &amp; Berdiskusi
                </h2>
                <p class="text-[15px] leading-relaxed text-ink-soft">
                    Terbuka untuk peluang kerja full-time, kontrak, maupun kolaborasi proyek web berbasis Laravel. Kirim pesan untuk terhubung langsung.
                </p>

                <!-- Pill sosial -->
                <ul class="flex flex-wrap gap-2.5" aria-label="Kontak dan media sosial">
                    @foreach ($portfolio['contact']['socials'] as $social)
                        <li>
                            <a
                                href="{{ $social['url'] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="press inline-flex items-center gap-2 px-3 py-2 bg-white border-2 border-ink shadow-hard-sm font-mono text-[11px] uppercase tracking-wider"
                            >
                                <span>{{ $social['name'] }}</span>
                                <span aria-hidden="true">↗</span>
                            </a>
                        </li>
                    @endforeach
                </ul>

                <p class="font-mono text-[11px] text-ink-soft">
                    Biasanya dibalas dalam 1×24 jam (WIB).
                </p>
            </div>

            <!-- Kanan: Lembar korespondensi -->
            <div class="lg:col-span-7">
                <div class="bg-white border-2 border-ink shadow-hard-lg">
                    <div class="flex items-center justify-between px-4 py-2 border-b-2 border-ink bg-paper font-mono text-[10px] uppercase tracking-widest">
                        <span>Lembar Pesan</span>
                        <span class="hidden sm:inline">Kepada: {{ $portfolio['email'] }}</span>
                    </div>

                    <div class="p-4 sm:p-6">
                        @if (session('success'))
                            <div role="status" class="mb-4 flex gap-2 px-3 py-2.5 border-2 border-ink bg-mint/25 text-sm font-medium">
                                <span class="font-mono font-bold" aria-hidden="true">[OK]</span>
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif

                        @if (session('error'))
                            <div role="alert" class="mb-4 flex gap-2 px-3 py-2.5 border-2 border-ink bg-rose-100 text-sm font-medium">
                                <span class="font-mono font-bold" aria-hidden="true">[ERR]</span>
                                <span>{{ session('error') }}</span>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div role="alert" class="mb-4 px-3 py-2.5 border-2 border-ink bg-tangerine/20 text-sm">
                                <p class="font-mono font-bold text-[11px] uppercase tracking-wider mb-1">[!] Periksa kembali isian:</p>
                                <ul class="list-disc pl-5 space-y-0.5">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form
                            action="{{ $portfolio['contact']['form_endpoint'] }}"
                            method="POST"
                            class="space-y-4"
                        >
                            @csrf
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="name" class="{{ $labelClass }}">Nama</label>
                                    <input
                                        type="text"
                                        name="name"
                                        id="name"
                                        required
                                        autocomplete="name"
                                        value="{{ old('name') }}"
                                        placeholder="Nama Anda"
                                        class="{{ $inputClass }}"
                                    >
                                </div>
                                <div>
                                    <label for="email" class="{{ $labelClass }}">Email</label>
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        required
                                        autocomplete="email"
                                        value="{{ old('email') }}"
                                        placeholder="email@domain.com"
                                        class="{{ $inputClass }}"
                                    >
                                </div>
                            </div>

                            <div>
                                <label for="message" class="{{ $labelClass }}">Pesan</label>
                                <textarea
                                    name="message"
                                    id="message"
                                    rows="5"
                                    required
                                    placeholder="Ceritakan kebutuhan proyek atau pertanyaan Anda..."
                                    class="{{ $inputClass }} resize-y min-h-[120px]"
                                >{{ old('message') }}</textarea>
                            </div>

                            <div class="flex flex-col-reverse sm:flex-row sm:items-center sm:justify-between gap-3 pt-1">
                                <p class="font-mono text-[10px] uppercase tracking-wider text-ink-soft">
                                    Semua kolom wajib diisi
                                </p>
                                <button
                                    type="submit"
                                    class="press inline-flex items-center justify-center gap-2 px-6 py-2.5 bg-citypop border-2 border-ink shadow-hard font-display font-bold text-sm cursor-pointer"
                                >
                                    Kirim Pesan
                                    <span aria-hidden="true">→</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
