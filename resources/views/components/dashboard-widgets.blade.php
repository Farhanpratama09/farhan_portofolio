@props(['portfolio'])

<section 
    id="dashboard" 
    x-data="{ 
        isPlaying: false, 
        audioCtx: null,
        intervalId: null,
        toggleMusic() {
            this.isPlaying = !this.isPlaying;
            if (this.isPlaying) {
                this.playLofiBeep();
            } else {
                if (this.intervalId) clearInterval(this.intervalId);
            }
        },
        playLofiBeep() {
            try {
                if (!this.audioCtx) {
                    this.audioCtx = new (window.AudioContext || window.webkitAudioContext)();
                }
                const chords = [261.63, 329.63, 392.00, 523.25, 440.00];
                let idx = 0;
                
                const playNote = () => {
                    if (!this.isPlaying) return;
                    let osc = this.audioCtx.createOscillator();
                    let gain = this.audioCtx.createGain();
                    osc.type = 'sine';
                    osc.frequency.setValueAtTime(chords[idx % chords.length], this.audioCtx.currentTime);
                    gain.gain.setValueAtTime(0.04, this.audioCtx.currentTime);
                    gain.gain.exponentialRampToValueAtTime(0.0001, this.audioCtx.currentTime + 1.2);
                    osc.connect(gain);
                    gain.connect(this.audioCtx.destination);
                    osc.start();
                    osc.stop(this.audioCtx.currentTime + 1.2);
                    idx++;
                };
                
                playNote();
                this.intervalId = setInterval(playNote, 1400);
            } catch (e) {
                console.log('Audio ambient mode active');
            }
        }
    }"
    class="py-6 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 scroll-mt-20"
>
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
        
        <!-- Left: Pemutar Musik Koding -->
        <div class="lg:col-span-5 rounded-3xl bg-white dark:bg-zinc-900 border border-sky-100 dark:border-zinc-800 p-6 sm:p-7 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between relative overflow-hidden group">
            
            <div class="absolute -top-12 -right-12 w-32 h-32 bg-sky-200/40 dark:bg-sky-900/20 rounded-full blur-2xl pointer-events-none"></div>

            <!-- Header -->
            <div class="flex items-center justify-between pb-4 border-b border-sky-50 dark:border-zinc-800">
                <div class="flex items-center gap-2.5">
                    <span class="text-xl p-2 rounded-xl bg-sky-50 dark:bg-zinc-800 border border-sky-100 dark:border-zinc-700 animate-float">🎧</span>
                    <div>
                        <h3 class="text-xs font-bold text-slate-800 dark:text-white">Musik Koding</h3>
                        <p class="text-[11px] text-slate-400 dark:text-zinc-500">{{ $portfolio['music']['bpm'] }}</p>
                    </div>
                </div>
                <!-- Equalizer Bars -->
                <div class="flex items-end gap-1 h-5">
                    <span :class="isPlaying ? 'animate-bounce h-5' : 'h-2'" class="w-1 bg-sky-500 rounded-full transition-all duration-300"></span>
                    <span :class="isPlaying ? 'animate-bounce h-3' : 'h-4'" class="w-1 bg-indigo-500 rounded-full transition-all duration-300"></span>
                    <span :class="isPlaying ? 'animate-bounce h-5' : 'h-1.5'" class="w-1 bg-sky-400 rounded-full transition-all duration-300"></span>
                    <span :class="isPlaying ? 'animate-bounce h-4' : 'h-3'" class="w-1 bg-cyan-400 rounded-full transition-all duration-300"></span>
                </div>
            </div>

            <!-- Piringan Hitam Vinyl -->
            <div class="my-6 flex items-center gap-5">
                <div class="relative shrink-0 animate-float-slow">
                    <div 
                        :class="isPlaying ? 'animate-spin' : ''"
                        style="animation-duration: 4s;"
                        class="w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-slate-900 border-4 border-slate-700 shadow-2xl flex items-center justify-center relative transition-all"
                    >
                        <div class="w-14 h-14 rounded-full border border-slate-700/60 flex items-center justify-center">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-sky-400 to-indigo-500 flex items-center justify-center shadow-inner">
                                <div class="w-2.5 h-2.5 rounded-full bg-slate-900"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Info Lagu -->
                <div class="space-y-1 overflow-hidden">
                    <span class="inline-block px-2.5 py-0.5 rounded-full bg-sky-100 dark:bg-sky-950 text-sky-700 dark:text-sky-300 font-bold text-[10px]">
                        Lofi Beat
                    </span>
                    <h4 class="text-sm sm:text-base font-bold text-slate-800 dark:text-white truncate">
                        {{ $portfolio['music']['title'] }}
                    </h4>
                    <p class="text-xs text-slate-500 dark:text-zinc-400 truncate">
                        {{ $portfolio['music']['artist'] }}
                    </p>
                </div>
            </div>

            <!-- Kontrol Audio -->
            <div class="space-y-3 pt-2">
                <div class="w-full bg-slate-100 dark:bg-zinc-800 h-1.5 rounded-full overflow-hidden">
                    <div :style="`width: ${isPlaying ? 85 : 35}%`" class="bg-gradient-to-r from-sky-500 to-indigo-500 h-full rounded-full transition-all duration-500"></div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <button type="button" @click="toggleMusic()" class="text-slate-400 hover:text-sky-600 transition hover:scale-110">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6 6h2v12H6zm3.5 6l8.5 6V6z"/></svg>
                        </button>
                        <button 
                            type="button" 
                            @click="toggleMusic()"
                            class="w-10 h-10 rounded-full bg-sky-500 hover:bg-sky-600 text-white shadow-md shadow-sky-500/25 flex items-center justify-center transition hover:scale-110 cursor-pointer"
                        >
                            <svg x-show="!isPlaying" class="w-4 h-4 ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            <svg x-show="isPlaying" x-cloak class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                        </button>
                        <button type="button" @click="toggleMusic()" class="text-slate-400 hover:text-sky-600 transition hover:scale-110">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M6 18l8.5-6L6 6v12zM16 6v12h2V6h-2z"/></svg>
                        </button>
                    </div>

                    <span class="text-[11px] font-bold text-sky-600 dark:text-sky-400">
                        <span x-text="isPlaying ? 'Memutar Suara ♫' : 'Dijeda'"></span>
                    </span>
                </div>
            </div>

        </div>

        <!-- Right: Kartu Info & Toolkit -->
        <div class="lg:col-span-7 rounded-3xl bg-white dark:bg-zinc-900 border border-sky-100 dark:border-zinc-800 p-6 sm:p-7 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col justify-between space-y-5 relative overflow-hidden">
            
            <!-- Header -->
            <div class="flex items-center justify-between">
                <h3 class="text-base sm:text-lg font-bold text-slate-800 dark:text-white tracking-tight">
                    Fokus & Teknologi
                </h3>
                <span class="text-xs font-bold text-sky-600 dark:text-sky-400">Farhan Pratama</span>
            </div>

            <!-- 2 Sticker Cards Sederhana & Menarik -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                
                <div 
                    x-data="{ count: 0 }"
                    @click="count++"
                    class="group relative flex items-center justify-between p-4 rounded-2xl bg-gradient-to-tr from-sky-400 via-sky-500 to-indigo-600 text-white shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-pointer overflow-hidden animate-float"
                >
                    <div class="absolute -right-4 -bottom-4 w-16 h-16 bg-white/20 rounded-full blur-lg"></div>
                    <div class="flex items-center gap-3">
                        <span class="text-3xl group-hover:rotate-12 transition-transform select-none">🚀</span>
                        <div>
                            <h4 class="text-xs font-bold text-white">Sistem Informasi</h4>
                            <p class="text-[10px] text-sky-100">Aplikasi Web & Manajemen</p>
                        </div>
                    </div>
                    <span class="text-[10px] px-2 py-1 rounded-full bg-white/20 backdrop-blur-md font-bold">
                        <span x-text="count > 0 ? count + ' ✦' : 'Klik'"></span>
                    </span>
                </div>

                <div 
                    x-data="{ active: false }"
                    @click="active = !active"
                    class="group relative flex items-center justify-between p-4 rounded-2xl bg-gradient-to-tr from-indigo-500 via-sky-600 to-cyan-500 text-white shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-pointer overflow-hidden animate-float-slow"
                >
                    <div class="absolute -right-4 -bottom-4 w-16 h-16 bg-white/20 rounded-full blur-lg"></div>
                    <div class="flex items-center gap-3">
                        <span class="text-3xl group-hover:scale-125 transition-transform select-none">⚡</span>
                        <div>
                            <h4 class="text-xs font-bold text-white">Laravel Ecosystem</h4>
                            <p class="text-[10px] text-sky-100">Backend & API</p>
                        </div>
                    </div>
                    <span class="text-[10px] px-2 py-1 rounded-full bg-white/20 backdrop-blur-md font-bold">
                        <span x-text="active ? 'Aktif' : 'Tap'"></span>
                    </span>
                </div>

            </div>

            <!-- Toolkit Badges -->
            <div class="pt-3 border-t border-sky-50 dark:border-zinc-800">
                <span class="block text-[11px] font-bold text-slate-400 dark:text-zinc-500 mb-2">
                    Teknologi yang Digunakan:
                </span>
                <div class="flex flex-wrap gap-1.5">
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-sky-50 dark:bg-zinc-800 text-sky-700 dark:text-sky-300 border border-sky-100 dark:border-zinc-700 hover:bg-sky-100 transition">Laravel 13</span>
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-sky-50 dark:bg-zinc-800 text-sky-700 dark:text-sky-300 border border-sky-100 dark:border-zinc-700 hover:bg-sky-100 transition">PHP 8+</span>
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-sky-50 dark:bg-zinc-800 text-sky-700 dark:text-sky-300 border border-sky-100 dark:border-zinc-700 hover:bg-sky-100 transition">Tailwind CSS</span>
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-sky-50 dark:bg-zinc-800 text-sky-700 dark:text-sky-300 border border-sky-100 dark:border-zinc-700 hover:bg-sky-100 transition">Alpine.js</span>
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-sky-50 dark:bg-zinc-800 text-sky-700 dark:text-sky-300 border border-sky-100 dark:border-zinc-700 hover:bg-sky-100 transition">MySQL</span>
                    <span class="px-3 py-1 rounded-full text-xs font-bold bg-sky-50 dark:bg-zinc-800 text-sky-700 dark:text-sky-300 border border-sky-100 dark:border-zinc-700 hover:bg-sky-100 transition">REST API</span>
                </div>
            </div>

        </div>

    </div>

</section>
