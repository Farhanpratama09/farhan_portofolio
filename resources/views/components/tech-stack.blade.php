@props(['portfolio'])

<div id="tech-stack" class="flex flex-col space-y-4">
    
    <!-- Section Title (Recent Search style from Image 3) -->
    <div class="flex items-center justify-between">
        <h2 class="text-lg font-extrabold text-slate-800 dark:text-white tracking-tight">
            Recent Tech Stack
        </h2>
    </div>

    <!-- 5 Staggered Search Capsule Pills -->
    <div class="flex flex-col space-y-2.5">
        @foreach ($portfolio['tech_stack'] as $tech)
            <div 
                class="group flex items-center justify-between px-4 py-3 rounded-full {{ $tech['bg_class'] }} border shadow-sm hover:shadow-md hover:scale-[1.02] transition-all duration-200 cursor-default"
            >
                <div class="flex items-center gap-3">
                    <!-- Search Icon (🔍) inside Small Circle (Inspirasi Image 3) -->
                    <div class="flex items-center justify-center w-7 h-7 rounded-full bg-white/90 text-slate-700 shadow-sm shrink-0 group-hover:rotate-12 transition-transform">
                        <svg class="w-3.5 h-3.5 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>

                    <!-- Skill Name -->
                    <span class="text-xs sm:text-sm font-bold tracking-tight">
                        {{ $tech['name'] }}
                    </span>
                </div>

                <!-- Skill Meta / Level Bullet -->
                <span class="text-[10px] opacity-75 font-bold hidden sm:inline">
                    ✦
                </span>
            </div>
        @endforeach
    </div>

</div>
