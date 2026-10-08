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

    'cv_url' => '/files/cv_FarhanPratama.pdf',

    /*
    |--------------------------------------------------------------------------
    | Menu Navigasi
    |--------------------------------------------------------------------------
    */
    'nav' => [
        ['id' => 'hero', 'label' => 'Profil', 'url' => '#hero'],
        ['id' => 'skills', 'label' => 'Keahlian', 'url' => '#skills'],
        ['id' => 'projects', 'label' => 'Proyek', 'url' => '#projects'],
        ['id' => 'experience', 'label' => 'Exp Log', 'url' => '#projects', 'is_modal' => true],
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
            'github' => 'https://github.com/Farhanpratama09/penilaian.git',
            'demo' => '#',
        ],
        [
            'id' => 'portfolio-v1',
            'title' => 'Website Portofolio Farhan',
            'category' => 'Frontend & Web',
            'tags' => ['Laravel 13', 'Tailwind CSS', 'Alpine.js'],
            'description' => 'Website portofolio pribadi bertema soft dashboard dengan mode gelap/terang dan arsitektur komponen Blade yang rapi.',
            'gradient' => 'from-indigo-600 via-sky-600 to-slate-900',
            'github' => 'https://github.com/Farhanpratama09/farhan_portofolio',
            'demo' => '#',
        ],
        [
            'id' => 'next-quest',
            'title' => 'Proyek Berikutnya: Ide Anda?',
            'desc' => 'Punya ide sistem web atau ingin membangun aplikasi berbasis Laravel? Mari diskusikan dan wujudkan bersama.',
            'category' => 'Kolaborasi',
            'tech' => ['Laravel', 'MySQL', 'Tailwind CSS'],
            'tags' => ['Laravel', 'MySQL', 'Tailwind CSS'],
            'github' => null,
            'demo' => '#contact',
            'is_cta' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tentang Saya & Fokus
    |--------------------------------------------------------------------------
    */
    'about' => [
        'greeting' => 'Halo, saya Farhan.',
        'bio' => 'Web developer yang berfokus pada ekosistem Laravel dan Tailwind CSS. Terbiasa merancang skema database, menyusun arsitektur logika backend yang terstruktur, hingga membangun antarmuka web yang responsif dan interaktif.',
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
                'title' => 'Struktur Kode Bersih',
                'desc' => 'Penyusunan arsitektur kode yang modular, efisien, dan mudah dirawat.',
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
    | Riwayat Pengalaman Kerja
    |--------------------------------------------------------------------------
    */
    'experiences' => [
        [
            'role' => 'Petugas Pencacah Lapangan (Mitra BPS)',
            'company' => 'Badan Pusat Statistik (BPS)',
            'period' => '2026 · 2,5 Bulan',
            'status' => 'Selesai',
            'is_active' => false,
            'desc' => 'Bertanggung jawab dalam pengumpulan, verifikasi, dan validasi data sensus ekonomi pelaku usaha di lapangan dengan kepatuhan metodologi ketat.',
            'highlights' => [
                'Melakukan pencacahan dan entri data puluhan pelaku usaha dengan akurasi tinggi.',
                'Menjaga validitas dan konsistensi data sebelum diproses ke sistem pusat.',
                'Berkomunikasi efektif dengan beragam karakter responden usaha.',
            ],
        ],
        [
            'role' => 'Daily Worker Logistics Associate',
            'company' => 'Shopee Express (DC Sungai Kakap, Kubu Raya, Kalimantan Barat)',
            'period' => '2026 · 1 Bulan',
            'status' => 'Nonaktif',
            'is_active' => false,
            'desc' => 'Mengelola alur logistik pergudangan harian dalam lingkungan kerja bertempo cepat (fast-paced environment).',
            'highlights' => [
                'Melakukan sortir, scanning paket, dan alokasi muatan rute distribusi harian.',
                'Menjaga ketelitian dan pemenuhan target volume logistik tanpa salah kirim.',
                'Mendukung operasional bongkar muat kargo barang secara terorganisir.',
            ],
        ],
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
