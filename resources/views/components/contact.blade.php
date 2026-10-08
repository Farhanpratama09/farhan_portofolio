@props(['portfolio'])

<section id="contact" class="py-8 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Contact Container Card -->
    <div class="rounded-3xl bg-white dark:bg-zinc-900 border border-sky-100 dark:border-zinc-800 p-6 sm:p-10 shadow-sm">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <!-- Left Info -->
            <div class="lg:col-span-5 space-y-4">
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-sky-100 dark:bg-sky-950/60 text-sky-700 dark:text-sky-300 text-xs font-bold">
                    <span>✦</span> Get In Touch
                </div>
                
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-800 dark:text-white tracking-tight">
                    Mari Terhubung & Berdiskusi
                </h2>
                
                <p class="text-xs sm:text-sm text-slate-600 dark:text-zinc-400 leading-relaxed">
                    Tertarik berkolaborasi dalam pengembangan sistem informasi, aplikasi web Laravel, atau ingin berdiskusi seputar rekayasa perangkat lunak? Kirimkan pesan langsung melalui formulir atau kontak di bawah:
                </p>

                <!-- Social Pills -->
                <div class="pt-2 flex flex-wrap gap-2">
                    @foreach ($portfolio['contact']['socials'] as $social)
                        <a 
                            href="{{ $social['url'] }}" 
                            target="_blank" 
                            rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-sky-50 dark:bg-zinc-800 hover:bg-sky-100 dark:hover:bg-zinc-700 text-slate-700 dark:text-zinc-200 text-xs font-bold border border-sky-100 dark:border-zinc-700 transition hover:-translate-y-0.5"
                        >
                            <span>{{ $social['name'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Right Message Form -->
            <div class="lg:col-span-7">
                @if (session('success'))
                    <div class="mb-4 rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-xs font-semibold text-emerald-700 dark:border-emerald-800 dark:bg-emerald-950/40 dark:text-emerald-300">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="mb-4 rounded-2xl border border-rose-200 bg-rose-50 px-4 py-3 text-xs font-semibold text-rose-700 dark:border-rose-800 dark:bg-rose-950/40 dark:text-rose-300">
                        {{ session('error') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-4 rounded-2xl border border-amber-200 bg-amber-50 px-4 py-3 text-xs font-semibold text-amber-700 dark:border-amber-800 dark:bg-amber-950/40 dark:text-amber-300">
                        <ul class="list-disc pl-4 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form 
                    action="{{ $portfolio['contact']['form_endpoint'] }}" 
                    method="POST" 
                    class="space-y-3.5"
                >
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                        <div>
                            <label for="name" class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 dark:text-zinc-400 mb-1">Nama Lengkap</label>
                            <input 
                                type="text" 
                                name="name" 
                                id="name" 
                                required 
                                placeholder="Nama Anda"
                                class="w-full px-4 py-2.5 rounded-2xl bg-[#f4f6f9] dark:bg-zinc-800/80 border border-sky-100 dark:border-zinc-700 text-slate-800 dark:text-white text-xs placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500 transition"
                            >
                        </div>
                        <div>
                            <label for="email" class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 dark:text-zinc-400 mb-1">Alamat Email</label>
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                required 
                                placeholder="email@domain.com"
                                class="w-full px-4 py-2.5 rounded-2xl bg-[#f4f6f9] dark:bg-zinc-800/80 border border-sky-100 dark:border-zinc-700 text-slate-800 dark:text-white text-xs placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500 transition"
                            >
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 dark:text-zinc-400 mb-1">Pesan Anda</label>
                        <textarea 
                            name="message" 
                            id="message" 
                            rows="3" 
                            required 
                            placeholder="Tuliskan pesan atau kebutuhan proyek Anda di sini..."
                            class="w-full px-4 py-2.5 rounded-2xl bg-[#f4f6f9] dark:bg-zinc-800/80 border border-sky-100 dark:border-zinc-700 text-slate-800 dark:text-white text-xs placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500 transition resize-none"
                        ></textarea>
                    </div>

                    <button 
                        type="submit" 
                        class="w-full sm:w-auto px-7 py-2.5 rounded-full bg-sky-500 hover:bg-sky-600 text-white font-extrabold text-xs shadow-md shadow-sky-500/20 transition hover:-translate-y-0.5 cursor-pointer inline-flex items-center justify-center gap-2"
                    >
                        <span>Kirim Pesan</span>
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </form>
            </div>

        </div>

    </div>

</section>
