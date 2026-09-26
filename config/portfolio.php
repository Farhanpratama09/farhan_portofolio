<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Personal & Profile Information
    |--------------------------------------------------------------------------
    */
    'name' => 'Farhan Pratama',
    'role' => 'Web Developer',
    'badge' => 'Full-Stack & System Developer',
    'tagline' => 'Mengembangkan aplikasi web modern, efisien, dan terstruktur. Berfokus pada pengembangan sistem informasi dan integrasi metode evaluasi digital.',
    'location' => 'Indonesia',
    'email' => 'fahranpratama@gmail.com',
    'whatsapp' => 'https://wa.me/6281234567890',
    'github' => 'https://github.com/farhanpratama',
    'linkedin' => 'https://linkedin.com/in/farhanpratama',
    'avatar' => '/images/avatar-chibi.png',

    /*
    |--------------------------------------------------------------------------
    | Navigation Links
    |--------------------------------------------------------------------------
    */
    'nav' => [
        ['label' => 'Home', 'url' => '#hero', 'active' => true],
        ['label' => 'Projects', 'url' => '#projects', 'active' => false],
        ['label' => 'Tech Stack', 'url' => '#tech-stack', 'active' => false],
        ['label' => 'About', 'url' => '#info-cards', 'active' => false],
        ['label' => 'Contact', 'url' => '#contact', 'active' => false],
    ],

    /*
    |--------------------------------------------------------------------------
    | Featured Projects (Artwork/Showcase)
    |--------------------------------------------------------------------------
    */
    'featured_projects' => [
        [
            'title' => 'Aplikasi Monev Kinerja Guru',
            'subtitle' => 'Sistem Evaluasi Berbasis Metode BARS',
            'author' => 'by Farhan Pratama',
            'tags' => ['Laravel', 'MySQL'],
            'description' => 'Sistem monitoring dan evaluasi kinerja guru terintegrasi dengan kalkulasi metode Behaviorally Anchored Rating Scale.',
            'gradient' => 'from-sky-700 via-indigo-900 to-slate-950',
            'image' => '/images/project-monev.jpg',
            'github' => 'https://github.com/farhanpratama',
            'demo' => '#',
        ],
        [
            'title' => 'AI Smart Document Analyzer',
            'subtitle' => 'Platform Ekstraksi & Ringkasan Teks Cerdas',
            'author' => 'by Farhan Pratama',
            'tags' => ['Laravel 13', 'Tailwind', 'AI API'],
            'description' => 'Aplikasi pemrosesan dokumen berbasis LLM untuk ekstraksi informasi dan analisis konten secara real-time.',
            'gradient' => 'from-cyan-700 via-sky-900 to-zinc-950',
            'image' => '/images/project-ai.jpg',
            'github' => 'https://github.com/farhanpratama',
            'demo' => '#',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Recent Tech Stack (Gradient Search Pills)
    |--------------------------------------------------------------------------
    */
    'tech_stack' => [
        [
            'name' => 'Laravel Framework',
            'desc' => 'v13 • MVC Architecture • Blade Templating',
            'bg_class' => 'bg-sky-200 text-sky-900 border-sky-300 hover:bg-sky-300 dark:bg-sky-900/60 dark:text-sky-200 dark:border-sky-700',
        ],
        [
            'name' => 'PHP 8+',
            'desc' => 'Modern OOP • Clean Architecture • Type Safety',
            'bg_class' => 'bg-sky-300 text-sky-950 border-sky-400 hover:bg-sky-400 dark:bg-sky-800/70 dark:text-sky-100 dark:border-sky-600',
        ],
        [
            'name' => 'JavaScript / Alpine.js',
            'desc' => 'Reactive UI • Smooth Transitions • SPA Light Logic',
            'bg_class' => 'bg-sky-400 text-white border-sky-500 hover:bg-sky-500 dark:bg-sky-700/80 dark:text-white dark:border-sky-500',
        ],
        [
            'name' => 'Tailwind CSS v4',
            'desc' => 'Modern Utility Styling • Mobile-first • Responsive',
            'bg_class' => 'bg-slate-800 text-white border-slate-700 hover:bg-slate-900 dark:bg-zinc-800 dark:text-white dark:border-zinc-700',
        ],
        [
            'name' => 'MySQL & Database Design',
            'desc' => 'Relational DB • Indexing • Schema Optimization',
            'bg_class' => 'bg-white text-slate-800 border-sky-200 hover:border-sky-400 dark:bg-zinc-900 dark:text-zinc-100 dark:border-zinc-700',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Stickers (Chibi Widgets with close button)
    |--------------------------------------------------------------------------
    */
    'stickers' => [
        [
            'id' => 'sticker-monev',
            'title' => 'Web Monev',
            'emoji' => '🚀',
            'tag' => 'System Specialist',
            'bg_gradient' => 'from-sky-300 via-sky-400 to-indigo-400',
        ],
        [
            'id' => 'sticker-eval',
            'title' => 'System Evaluation',
            'emoji' => '⚡',
            'tag' => 'Research & Dev',
            'bg_gradient' => 'from-indigo-300 via-sky-400 to-cyan-300',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Horizontal Info Cards
    |--------------------------------------------------------------------------
    */
    'info_cards' => [
        [
            'title' => 'Full-Stack Development',
            'description' => 'Pengembangan web end-to-end dari perancangan skema database hingga antarmuka pengguna yang responsif.',
            'icon' => 'code-bracket',
            'icon_color' => 'bg-sky-100 text-sky-600 dark:bg-sky-950 dark:text-sky-400',
        ],
        [
            'title' => 'System Evaluation & Research',
            'description' => 'Penerapan metode evaluasi digital dan pengolahan data sistem informasi untuk instansi maupun institusi pendidikan.',
            'icon' => 'chart-bar',
            'icon_color' => 'bg-emerald-100 text-emerald-600 dark:bg-emerald-950 dark:text-emerald-400',
        ],
        [
            'title' => 'Clean Architecture',
            'description' => 'Penulisan kode PHP/Laravel yang terstruktur, modular, dan mudah di-maintain untuk skalabilitas jangka panjang.',
            'icon' => 'cube-transparent',
            'icon_color' => 'bg-indigo-100 text-indigo-600 dark:bg-indigo-950 dark:text-indigo-400',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Contact Configuration
    |--------------------------------------------------------------------------
    */
    'contact' => [
        'form_endpoint' => 'https://formspree.io/f/your-form-id',
        'socials' => [
            ['name' => 'GitHub', 'url' => 'https://github.com/farhanpratama', 'icon' => 'github'],
            ['name' => 'LinkedIn', 'url' => 'https://linkedin.com/in/farhanpratama', 'icon' => 'linkedin'],
            ['name' => 'WhatsApp', 'url' => 'https://wa.me/6281234567890', 'icon' => 'whatsapp'],
            ['name' => 'Email', 'url' => 'mailto:fahranpratama@gmail.com', 'icon' => 'email'],
        ],
    ],
];
