<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Personal Profile
    |--------------------------------------------------------------------------
    */
    'name' => 'Farhan Pratama',
    'role' => 'Web Developer',
    'subtitle' => 'Full-Stack Web & System Enthusiast',
    'japanese_role' => 'ウェブ開発者',
    'tagline' => 'Mengembangkan aplikasi web modern, efisien, dan terstruktur. Berfokus pada perancangan sistem informasi, clean architecture, dan implementasi teknologi digital.',
    'email' => 'fahranpratama@gmail.com',
    'whatsapp' => 'https://wa.me/6281234567890',
    'github' => 'https://github.com/farhanpratama',
    'linkedin' => 'https://linkedin.com/in/farhanpratama',

    /*
    |--------------------------------------------------------------------------
    | Navigation Links (Synced with on-page section IDs)
    |--------------------------------------------------------------------------
    */
    'nav' => [
        ['id' => 'hero', 'label' => 'Home', 'url' => '#hero'],
        ['id' => 'projects', 'label' => 'Projects', 'url' => '#projects'],
        ['id' => 'about', 'label' => 'About', 'url' => '#about'],
        ['id' => 'dashboard', 'label' => 'Dashboard', 'url' => '#dashboard'],
        ['id' => 'contact', 'label' => 'Contact', 'url' => '#contact'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Featured Projects (Scalable Gallery - Works seamlessly with 3+ projects)
    |--------------------------------------------------------------------------
    */
    'projects' => [
        [
            'id' => 'monev-bars',
            'title' => 'Aplikasi Monev Kinerja Guru',
            'category' => 'System Information',
            'tags' => ['Laravel 13', 'MySQL', 'Metode BARS'],
            'description' => 'Sistem monitoring dan evaluasi kinerja tenaga pendidik terintegrasi menggunakan kalkulasi metode Behaviorally Anchored Rating Scale.',
            'gradient' => 'from-sky-600 via-indigo-700 to-slate-900',
            'github' => 'https://github.com/farhanpratama',
            'demo' => '#',
        ],
        [
            'id' => 'ai-analyzer',
            'title' => 'AI Smart Document Analyzer',
            'category' => 'AI & Web Service',
            'tags' => ['Laravel', 'OpenAI API', 'Alpine.js'],
            'description' => 'Platform ekstraksi teks dan analisis konten dokumen secara cerdas dengan integrasi LLM untuk percepatan telaah data.',
            'gradient' => 'from-cyan-600 via-sky-700 to-indigo-950',
            'github' => 'https://github.com/farhanpratama',
            'demo' => '#',
        ],
        [
            'id' => 'portfolio-v1',
            'title' => 'Personal Portfolio Space v1.0',
            'category' => 'Frontend & Dashboard',
            'tags' => ['Laravel 13', 'Tailwind CSS', 'Alpine.js'],
            'description' => 'Website portofolio interaktif berarsitektur modern dengan estetika soft anime/gaming dashboard dan dark mode persistence.',
            'gradient' => 'from-indigo-600 via-sky-600 to-slate-900',
            'github' => 'https://github.com/farhanpratama/webprofile-app',
            'demo' => '#',
        ],
        [
            'id' => 'inventory-system',
            'title' => 'Inventory & POS Management',
            'category' => 'Enterprise System',
            'tags' => ['Laravel', 'MySQL', 'Livewire', 'Chart.js'],
            'description' => 'Sistem inventaris terpadu dengan pelacakan stok real-time, laporan transaksi otomatis, dan analisis performa penjualan.',
            'gradient' => 'from-blue-600 via-indigo-800 to-zinc-950',
            'github' => 'https://github.com/farhanpratama',
            'demo' => '#',
        ],
        [
            'id' => 'e-learning-portal',
            'title' => 'E-Learning & Examination Hub',
            'category' => 'Education Platform',
            'tags' => ['Laravel', 'Tailwind CSS', 'Alpine.js'],
            'description' => 'Portal pembelajaran daring interaktif dengan fitur bank soal otomatis, ujian berbasis komputer (CBT), dan rekapitulasi nilai instan.',
            'gradient' => 'from-sky-700 via-blue-900 to-slate-950',
            'github' => 'https://github.com/farhanpratama',
            'demo' => '#',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | About Me Details
    |--------------------------------------------------------------------------
    */
    'about' => [
        'heading' => 'Perancangan Sistem & Rekayasa Perangkat Lunak',
        'subheading' => 'Software Engineering & System Information',
        'bio' => 'Saya adalah seorang Web Developer dengan ketertarikan mendalam dalam membangun aplikasi web yang terstruktur, efisien, dan berorientasi pada kepuasan pengguna. Saya berfokus pada arsitektur backend Laravel, perancangan skema database MySQL, serta pembuatan antarmuka responsif.',
        'pillars' => [
            [
                'emoji' => '🏛️',
                'title' => 'Clean Architecture',
                'desc' => 'Struktur kode modular berbasis pola MVC, mudah dirawat dan dikembangkan.',
            ],
            [
                'emoji' => '📊',
                'title' => 'System Evaluation',
                'desc' => 'Implementasi metode analitis dan komputasi data terstruktur untuk keputusan akurat.',
            ],
            [
                'emoji' => '⚡',
                'title' => 'Modern UX & Speed',
                'desc' => 'Desain antarmuka responsif dan performa tinggi dengan Tailwind CSS & Alpine.js.',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Lofi Beats / Music Widget Playlist
    |--------------------------------------------------------------------------
    */
    'music' => [
        'title' => 'Midnight Coding Symphony',
        'artist' => 'Lofi Chill • Farhan Dev Space',
        'bpm' => '84 BPM',
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
