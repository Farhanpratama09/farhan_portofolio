<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data Pribadi & Profil
    |--------------------------------------------------------------------------
    */
    'name' => 'Farhan Pratama',
    'role' => 'Web Developer',
    'tagline' => 'Saya fokus mengembangkan aplikasi web dengan Laravel dan Tailwind CSS, mulai dari perancangan sistem, database, hingga antarmuka pengguna yang nyaman digunakan.',
    'email' => 'fahranpratama@gmail.com',
    'whatsapp' => 'https://wa.me/6281234567890',
    'github' => 'https://github.com/farhanpratama',
    'linkedin' => 'https://linkedin.com/in/farhanpratama',

    /*
    |--------------------------------------------------------------------------
    | Menu Navigasi
    |--------------------------------------------------------------------------
    */
    'nav' => [
        ['id' => 'hero', 'label' => 'Home', 'url' => '#hero'],
        ['id' => 'projects', 'label' => 'Proyek', 'url' => '#projects'],
        ['id' => 'about', 'label' => 'Tentang', 'url' => '#about'],
        ['id' => 'dashboard', 'label' => 'Aktivitas', 'url' => '#dashboard'],
        ['id' => 'contact', 'label' => 'Kontak', 'url' => '#contact'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Daftar Proyek
    |--------------------------------------------------------------------------
    */
    'projects' => [
        [
            'id' => 'monev-bars',
            'title' => 'Aplikasi Monev Kinerja Guru',
            'category' => 'Sistem Informasi',
            'tags' => ['Laravel 13', 'MySQL', 'Metode BARS'],
            'description' => 'Aplikasi evaluasi dan monitoring kinerja guru berbasis web dengan implementasi metode Behaviorally Anchored Rating Scale (BARS).',
            'gradient' => 'from-sky-600 via-indigo-700 to-slate-900',
            'github' => 'https://github.com/farhanpratama',
            'demo' => '#',
        ],
        [
            'id' => 'ai-analyzer',
            'title' => 'AI Document Analyzer',
            'category' => 'Web App & AI',
            'tags' => ['Laravel', 'OpenAI API', 'Alpine.js'],
            'description' => 'Aplikasi pembaca dan perangkum dokumen otomatis dengan integrasi AI API untuk mempermudah analisis teks panjang.',
            'gradient' => 'from-cyan-600 via-sky-700 to-indigo-950',
            'github' => 'https://github.com/farhanpratama',
            'demo' => '#',
        ],
        [
            'id' => 'portfolio-v1',
            'title' => 'Website Portofolio Farhan',
            'category' => 'Frontend & Web',
            'tags' => ['Laravel 13', 'Tailwind CSS', 'Alpine.js'],
            'description' => 'Website portofolio pribadi bertema soft dashboard dengan mode gelap/terang dan arsitektur komponen Blade yang rapi.',
            'gradient' => 'from-indigo-600 via-sky-600 to-slate-900',
            'github' => 'https://github.com/farhanpratama/webprofile-app',
            'demo' => '#',
        ],
        [
            'id' => 'inventory-system',
            'title' => 'Sistem Manajemen Inventaris',
            'category' => 'Aplikasi Web',
            'tags' => ['Laravel', 'MySQL', 'Tailwind CSS'],
            'description' => 'Sistem pencatatan barang dan transaksi dengan fitur rekapitulasi data otomatis serta laporan terstruktur.',
            'gradient' => 'from-blue-600 via-indigo-800 to-zinc-950',
            'github' => 'https://github.com/farhanpratama',
            'demo' => '#',
        ],
        [
            'id' => 'elearning-portal',
            'title' => 'Portal Ujian & Pembelajaran',
            'category' => 'Platform Edukasi',
            'tags' => ['Laravel', 'Tailwind CSS', 'Alpine.js'],
            'description' => 'Platform pembelajaran dan ujian online interaktif dengan bank soal serta penilaian hasil tes secara instan.',
            'gradient' => 'from-sky-700 via-blue-900 to-slate-950',
            'github' => 'https://github.com/farhanpratama',
            'demo' => '#',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tentang Saya & Fokus
    |--------------------------------------------------------------------------
    */
    'about' => [
        'title' => 'Tentang Saya',
        'subtitle' => 'Pengembangan Web & Sistem Informasi',
        'bio' => 'Halo! Saya Farhan Pratama, seorang Web Developer yang menyukai pembuatan aplikasi web yang rapi, mudah digunakan, dan terstruktur. Terbiasa bekerja dengan ekosistem PHP/Laravel untuk backend serta Tailwind CSS untuk membangun tampilan antarmuka yang modern dan responsif.',
        'pillars' => [
            [
                'emoji' => '💻',
                'title' => 'Backend & Database',
                'desc' => 'Pengembangan logika aplikasi dengan Laravel serta perancangan database MySQL.',
            ],
            [
                'emoji' => '🎨',
                'title' => 'Tampilan Responsif',
                'desc' => 'Penyusunan UI yang rapi di berbagai ukuran layar dengan Tailwind CSS dan Alpine.js.',
            ],
            [
                'emoji' => '📂',
                'title' => 'Struktur Kode Rapi',
                'desc' => 'Penulisan kode yang modular dan teratur agar mudah dikembangkan ke depannya.',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Pemutar Musik Sederhana
    |--------------------------------------------------------------------------
    */
    'music' => [
        'title' => 'Lofi Coding Session',
        'artist' => 'Farhan Playlist',
        'bpm' => 'Santai & Fokus',
    ],

    /*
    |--------------------------------------------------------------------------
    | Kontak
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
