<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Personal Profile
    |--------------------------------------------------------------------------
    */
    'name' => 'Farhan Pratama',
    'role' => 'Web Developer',
    'subtitle' => 'Full-Stack Web & System Information Enthusiast',
    'tagline' => 'Mengembangkan aplikasi web modern, efisien, dan terstruktur. Berfokus pada perancangan sistem informasi, clean architecture, dan implementasi teknologi digital.',
    'email' => 'fahranpratama@gmail.com',
    'whatsapp' => 'https://wa.me/6281234567890',
    'github' => 'https://github.com/farhanpratama',
    'linkedin' => 'https://linkedin.com/in/farhanpratama',

    /*
    |--------------------------------------------------------------------------
    | Navigation Links
    |--------------------------------------------------------------------------
    */
    'nav' => [
        ['label' => 'Home', 'url' => '#hero'],
        ['label' => 'Projects', 'url' => '#projects'],
        ['label' => 'Dashboard', 'url' => '#dashboard'],
        ['label' => 'About', 'url' => '#about'],
        ['label' => 'Contact', 'url' => '#contact'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Featured Projects (Showcase Gallery)
    |--------------------------------------------------------------------------
    */
    'projects' => [
        [
            'id' => 'monev-bars',
            'title' => 'Aplikasi Monev Kinerja Guru',
            'category' => 'System Information',
            'tags' => ['Laravel 13', 'MySQL', 'Metode BARS', 'Tailwind CSS'],
            'description' => 'Sistem monitoring dan evaluasi kinerja tenaga pendidik terintegrasi menggunakan kalkulasi metode Behaviorally Anchored Rating Scale untuk objektivitas penilaian.',
            'gradient' => 'from-sky-600 via-indigo-700 to-slate-900',
            'accent_color' => 'bg-sky-400',
            'github' => 'https://github.com/farhanpratama',
            'demo' => '#',
        ],
        [
            'id' => 'ai-analyzer',
            'title' => 'AI Smart Document Analyzer',
            'category' => 'AI & Web Service',
            'tags' => ['Laravel', 'OpenAI API', 'Alpine.js', 'Vite'],
            'description' => 'Platform ekstraksi teks dan analisis konten dokumen secara cerdas dengan integrasi Large Language Model untuk percepatan telaah data.',
            'gradient' => 'from-cyan-600 via-sky-700 to-indigo-950',
            'accent_color' => 'bg-cyan-400',
            'github' => 'https://github.com/farhanpratama',
            'demo' => '#',
        ],
        [
            'id' => 'portfolio-v1',
            'title' => 'Personal Portfolio v1.0',
            'category' => 'Frontend & Dashboard',
            'tags' => ['Laravel 13', 'Tailwind CSS v4', 'Alpine.js'],
            'description' => 'Website portofolio interaktif berarsitektur modern dengan estetika soft anime/gaming dashboard, dark mode persistence, dan performa tinggi.',
            'gradient' => 'from-indigo-600 via-sky-600 to-slate-900',
            'accent_color' => 'bg-indigo-400',
            'github' => 'https://github.com/farhanpratama/webprofile-app',
            'demo' => '#',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Dashboard Focus & Skills Tags
    |--------------------------------------------------------------------------
    */
    'skills_tags' => [
        ['name' => 'Laravel 13', 'category' => 'Backend'],
        ['name' => 'PHP 8+', 'category' => 'Core'],
        ['name' => 'Tailwind CSS v4', 'category' => 'Styling'],
        ['name' => 'Alpine.js', 'category' => 'Interactivity'],
        ['name' => 'MySQL Database', 'category' => 'Database'],
        ['name' => 'RESTful APIs', 'category' => 'Integration'],
        ['name' => 'Clean Architecture', 'category' => 'Pattern'],
        ['name' => 'Git & GitHub', 'category' => 'Workflow'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Lofi Beats / Music Widget Playlist
    |--------------------------------------------------------------------------
    */
    'music' => [
        'title' => 'Late Night Coding Sessions',
        'artist' => 'Lofi Chill Beats • Farhan Space',
        'bpm' => '85 BPM',
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
