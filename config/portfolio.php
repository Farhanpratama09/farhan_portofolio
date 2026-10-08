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
    'email' => 'fahranpratama64@gmail.com',
    'whatsapp' => 'https://wa.me/628218919798?text=' . urlencode('Halo Farhan, saya ingin berdiskusi mengenai proyek atau kolaborasi.'),
    'github' => 'https://github.com/farhanpratama',
    'linkedin' => 'https://linkedin.com/in/farhanpratama',

    /*
    |--------------------------------------------------------------------------
    | Kartu Profil (Hero)
    |--------------------------------------------------------------------------
    | Foto: taruh file di public/images/profile.jpg. Selama file belum ada,
    | kartu otomatis menampilkan placeholder inisial "FP".
    */
    'photo' => 'images/profile.jpg',
    'initials' => 'FP',
    'location' => 'Indonesia',
    'timezone' => 'Asia/Jakarta',
    'available' => true,

    /*
    |--------------------------------------------------------------------------
    | Menu Navigasi
    |--------------------------------------------------------------------------
    */
    'nav' => [
        ['id' => 'hero', 'label' => 'Profil', 'url' => '#hero'],
        ['id' => 'skills', 'label' => 'Keahlian', 'url' => '#skills'],
        ['id' => 'projects', 'label' => 'Proyek', 'url' => '#projects'],
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
        'greeting' => 'Halo, saya Farhan.',
        'bio' => 'Saya membangun aplikasi web dengan Laravel, mulai dari merancang database, menulis logika backend, sampai menyusun antarmuka dengan Tailwind CSS. Belakangan saya banyak mendalami metode BARS (Behaviorally Anchored Rating Scale) dan menerapkannya ke sistem penilaian kinerja guru berbasis web.',
        'pillars' => [
            [
                'title' => 'Backend & Database',
                'desc' => 'Logika aplikasi dengan Laravel dan perancangan skema MySQL.',
            ],
            [
                'title' => 'Antarmuka Responsif',
                'desc' => 'Tampilan rapi di berbagai layar dengan Tailwind CSS dan Alpine.js.',
            ],
            [
                'title' => 'Penilaian Berbasis BARS',
                'desc' => 'Menerjemahkan skala perilaku menjadi alur penilaian yang terukur.',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Inventory Stack (Keahlian)
    |--------------------------------------------------------------------------
    | 'code' = singkatan di tile, 'accent' = citypop | mint | tangerine
    */
    'skills' => [
        ['code' => 'Lv', 'name' => 'Laravel', 'type' => 'Framework', 'accent' => 'tangerine'],
        ['code' => 'Php', 'name' => 'PHP', 'type' => 'Bahasa', 'accent' => 'citypop'],
        ['code' => 'Sql', 'name' => 'MySQL', 'type' => 'Database', 'accent' => 'mint'],
        ['code' => 'Tw', 'name' => 'Tailwind CSS', 'type' => 'Styling', 'accent' => 'citypop'],
        ['code' => 'Git', 'name' => 'Git', 'type' => 'Versi Kontrol', 'accent' => 'tangerine'],
        ['code' => 'Bs', 'name' => 'Algoritma BARS', 'type' => 'Metode', 'accent' => 'mint'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Kontak
    |--------------------------------------------------------------------------
    */
    'contact' => [
        'form_endpoint' => '/contact',
        'socials' => [
            ['name' => 'GitHub', 'url' => 'https://github.com/farhanpratama', 'icon' => 'github'],
            ['name' => 'LinkedIn', 'url' => 'https://linkedin.com/in/farhanpratama', 'icon' => 'linkedin'],
            [
                'name' => 'WhatsApp',
                'url' => 'https://wa.me/628218919798?text=' . urlencode('Halo Farhan, saya ingin berdiskusi mengenai proyek atau kolaborasi. Terima kasih.'),
                'icon' => 'whatsapp',
            ],
            [
                'name' => 'Email',
                'url' => 'https://mail.google.com/mail/?view=cm&fs=1&to=fahranpratama64@gmail.com&su=' . urlencode('Kontak dari Website Portfolio') . '&body=' . urlencode("Halo Farhan,\n\nSaya ingin berdiskusi mengenai proyek / kolaborasi.\n\nTerima kasih."),
                'icon' => 'email',
            ],
        ],
    ],
];
