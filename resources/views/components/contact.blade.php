@props(['portfolio'])

<section id="contact" class="py-20 scroll-mt-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex flex-col items-center text-center mb-16">
            <h2 class="text-xs font-semibold uppercase tracking-wider text-indigo-600 dark:text-indigo-400 mb-2">Kontak</h2>
            <p class="text-3xl sm:text-4xl font-bold tracking-tight text-zinc-900 dark:text-white">
                Mari Terhubung & Berdiskusi
            </p>
            <p class="mt-3 text-base text-zinc-600 dark:text-zinc-400 max-w-xl">
                Tertarik untuk berkolaborasi, mendiskusikan peluang proyek, atau sekadar bertukar wawasan seputar Web Dev dan AI? Jangan ragu untuk mengirimkan pesan!
            </p>
            <div class="w-12 h-1 bg-indigo-600 rounded-full mt-4"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12">
            
            <!-- Left Info & Social Links -->
            <div class="lg:col-span-5 space-y-8 flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-zinc-900 dark:text-white">
                        Informasi Kontak
                    </h3>
                    <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400 leading-relaxed">
                        Anda dapat menghubungi saya langsung melalui email atau saluran media sosial di bawah ini.
                    </p>

                    <div class="mt-6 space-y-4">
                        <!-- Direct Email -->
                        <a href="mailto:{{ $portfolio['email'] }}" class="flex items-center gap-4 p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 hover:border-indigo-500 transition group">
                            <div class="p-3 rounded-lg bg-indigo-50 dark:bg-indigo-950/60 text-indigo-600 dark:text-indigo-400 group-hover:scale-105 transition-transform">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <span class="text-xs font-semibold uppercase tracking-wider text-zinc-400">Email Langsung</span>
                                <p class="text-sm font-bold text-zinc-800 dark:text-zinc-200">{{ $portfolio['email'] }}</p>
                            </div>
                        </a>

                        <!-- Direct WhatsApp -->
                        @if (!empty($portfolio['whatsapp']))
                            <a href="{{ $portfolio['whatsapp'] }}" target="_blank" rel="noopener noreferrer" class="flex items-center gap-4 p-4 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 hover:border-emerald-500 transition group">
                                <div class="p-3 rounded-lg bg-emerald-50 dark:bg-emerald-950/60 text-emerald-600 dark:text-emerald-400 group-hover:scale-105 transition-transform">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.698c.97.545 1.764.819 2.796.82h.005c3.181 0 5.767-2.586 5.767-5.766.001-3.181-2.584-5.767-5.772-5.767zm0-2c4.28 0 7.768 3.487 7.768 7.767 0 4.28-3.488 7.767-7.768 7.767-1.325 0-2.571-.34-3.666-.941l-4.365 1.144 1.164-4.254c-.663-1.12-1.026-2.404-1.026-3.716 0-4.28 3.488-7.767 7.768-7.767z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="text-xs font-semibold uppercase tracking-wider text-zinc-400">WhatsApp</span>
                                    <p class="text-sm font-bold text-zinc-800 dark:text-zinc-200">Kirim Pesan WhatsApp</p>
                                </div>
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Social Media Buttons -->
                <div>
                    <h4 class="text-xs font-semibold uppercase tracking-wider text-zinc-400 dark:text-zinc-500 mb-3">
                        Media Sosial & Profil
                    </h4>
                    <div class="flex flex-wrap gap-2">
                        @foreach ($portfolio['contact']['socials'] as $social)
                            <a 
                                href="{{ $social['url'] }}" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 hover:border-indigo-500 dark:hover:border-indigo-500 text-xs font-semibold text-zinc-700 dark:text-zinc-300 hover:text-indigo-600 dark:hover:text-indigo-400 shadow-sm transition"
                            >
                                <span>{{ $social['name'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Right Message Form -->
            <div class="lg:col-span-7">
                <div class="rounded-2xl bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 p-6 sm:p-8 shadow-sm">
                    <form 
                        action="{{ $portfolio['contact']['form_endpoint'] }}" 
                        method="POST" 
                        class="space-y-5"
                    >
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="name" class="block text-xs font-semibold uppercase tracking-wider text-zinc-700 dark:text-zinc-300 mb-2">Nama Lengkap</label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    id="name" 
                                    required 
                                    placeholder="Farhan Pratama"
                                    class="w-full px-4 py-3 rounded-xl bg-zinc-50 dark:bg-zinc-800/60 border border-zinc-200 dark:border-zinc-700/60 text-zinc-900 dark:text-white text-sm placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                                >
                            </div>
                            <div>
                                <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-zinc-700 dark:text-zinc-300 mb-2">Alamat Email</label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    id="email" 
                                    required 
                                    placeholder="nama@domain.com"
                                    class="w-full px-4 py-3 rounded-xl bg-zinc-50 dark:bg-zinc-800/60 border border-zinc-200 dark:border-zinc-700/60 text-zinc-900 dark:text-white text-sm placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                                >
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-xs font-semibold uppercase tracking-wider text-zinc-700 dark:text-zinc-300 mb-2">Subjek Pesan</label>
                            <input 
                                type="text" 
                                name="subject" 
                                id="subject" 
                                required 
                                placeholder="Diskusi Proyek Web / Penawaran Kerjasama"
                                class="w-full px-4 py-3 rounded-xl bg-zinc-50 dark:bg-zinc-800/60 border border-zinc-200 dark:border-zinc-700/60 text-zinc-900 dark:text-white text-sm placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition"
                            >
                        </div>

                        <div>
                            <label for="message" class="block text-xs font-semibold uppercase tracking-wider text-zinc-700 dark:text-zinc-300 mb-2">Pesan Anda</label>
                            <textarea 
                                name="message" 
                                id="message" 
                                rows="4" 
                                required 
                                placeholder="Tuliskan detail kebutuhan atau pertanyaan Anda di sini..."
                                class="w-full px-4 py-3 rounded-xl bg-zinc-50 dark:bg-zinc-800/60 border border-zinc-200 dark:border-zinc-700/60 text-zinc-900 dark:text-white text-sm placeholder-zinc-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition resize-none"
                            ></textarea>
                        </div>

                        <button 
                            type="submit" 
                            class="w-full inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-sm shadow-md shadow-indigo-600/25 transition cursor-pointer"
                        >
                            <span>Kirim Pesan Sekarang</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>
