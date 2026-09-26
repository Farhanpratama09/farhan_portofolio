<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Personal Information
    |--------------------------------------------------------------------------
    */
    'name' => 'Farhan Pratama',
    'role' => 'Web Developer & AI Enthusiast',
    'tagline' => 'Membangun aplikasi web modern, scalable, dan cerdas dengan Laravel, Tailwind CSS, dan integrasi Artificial Intelligence.',
    'avatar' => '/images/profile-placeholder.png',
    'location' => 'Indonesia',
    'email' => 'fahranpratama@gmail.com',
    'whatsapp' => 'https://wa.me/6281234567890',
    'github' => 'https://github.com/farhanpratama',
    'linkedin' => 'https://linkedin.com/in/farhanpratama',
    'resume_url' => '#',

    /*
    |--------------------------------------------------------------------------
    | Navigation Links
    |--------------------------------------------------------------------------
    */
    'nav' => [
        ['label' => 'About', 'url' => '#about'],
        ['label' => 'Skills', 'url' => '#skills'],
        ['label' => 'Projects', 'url' => '#projects'],
        ['label' => 'Contact', 'url' => '#contact'],
    ],

    /*
    |--------------------------------------------------------------------------
    | About Me Section
    |--------------------------------------------------------------------------
    */
    'about' => [
        'bio' => 'Halo! Saya Farhan Pratama, seorang Web Developer yang bersemangat dalam merancang dan mengembangkan solusi digital yang efisien, intuitif, dan berdampak. Dengan spesialisasi pada ekosistem PHP/Laravel dan frontend modern, saya juga aktif mendalami implementasi Large Language Model (LLM) dan AI APIs untuk menciptakan aplikasi web yang lebih cerdas.',
        'highlights' => [
            [
                'title' => 'Core Focus',
                'value' => 'Full-Stack & AI Integration',
                'icon' => 'sparkles',
            ],
            [
                'title' => 'Primary Stack',
                'value' => 'Laravel 13 & Tailwind CSS',
                'icon' => 'code-bracket',
            ],
            [
                'title' => 'Approach',
                'value' => 'Clean Code & High Performance',
                'icon' => 'bolt',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tech Stack & Skills
    |--------------------------------------------------------------------------
    */
    'skills' => [
        'Core Web & Backend' => [
            ['name' => 'PHP', 'level' => 'Advanced', 'icon' => 'php'],
            ['name' => 'Laravel 13', 'level' => 'Advanced', 'icon' => 'laravel'],
            ['name' => 'MySQL', 'level' => 'Intermediate', 'icon' => 'mysql'],
            ['name' => 'RESTful APIs', 'level' => 'Advanced', 'icon' => 'api'],
        ],
        'Frontend & UI' => [
            ['name' => 'HTML5', 'level' => 'Advanced', 'icon' => 'html5'],
            ['name' => 'CSS3', 'level' => 'Advanced', 'icon' => 'css3'],
            ['name' => 'JavaScript', 'level' => 'Intermediate', 'icon' => 'javascript'],
            ['name' => 'Tailwind CSS', 'level' => 'Advanced', 'icon' => 'tailwind'],
            ['name' => 'Alpine.js', 'level' => 'Intermediate', 'icon' => 'alpinejs'],
        ],
        'Tools & Ecosystem' => [
            ['name' => 'Git & GitHub', 'level' => 'Advanced', 'icon' => 'git'],
            ['name' => 'Laragon', 'level' => 'Advanced', 'icon' => 'server'],
            ['name' => 'Vite', 'level' => 'Advanced', 'icon' => 'vite'],
            ['name' => 'AI APIs & LLMs', 'level' => 'Intermediate', 'icon' => 'cpu-chip'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Projects Showcase
    |--------------------------------------------------------------------------
    */
    'projects' => [
        [
            'title' => 'AI Smart Assistant & Document Analyzer',
            'category' => 'AI & Full-Stack',
            'featured' => true,
            'description' => 'Platform cerdas berbasis Laravel yang mengintegrasikan AI API untuk membaca, merangkum, dan menjawab pertanyaan terkait dokumen panjang secara real-time.',
            'problem_solution' => 'Menghemat waktu analisis dokumen hingga 70% dengan pipeline ekstraksi teks dan embedding berbasis LLM.',
            'tags' => ['Laravel 13', 'Tailwind CSS', 'Alpine.js', 'OpenAI API', 'MySQL'],
            'image' => '/images/project-1.jpg',
            'github' => 'https://github.com/farhanpratama',
            'demo' => 'https://demo.farhanpratama.dev',
        ],
        [
            'title' => 'E-Commerce Dashboard & Inventory Manager',
            'category' => 'Web Application',
            'featured' => true,
            'description' => 'Aplikasi manajemen inventaris toko online dengan pelacakan stok real-time, grafik performa penjualan, dan ekspor laporan otomatis.',
            'problem_solution' => 'Menyelesaikan permasalahan mismatch stok dan mempermudah rekapitulasi data pesanan harian.',
            'tags' => ['Laravel', 'Tailwind CSS', 'Chart.js', 'MySQL'],
            'image' => '/images/project-2.jpg',
            'github' => 'https://github.com/farhanpratama',
            'demo' => 'https://demo.farhanpratama.dev',
        ],
        [
            'title' => 'Personal Portfolio v1.0',
            'category' => 'Frontend & SPA',
            'featured' => true,
            'description' => 'Website portofolio interaktif ultra-ringan dengan dark mode persistence, dynamic blade components, dan zero-database architecture.',
            'problem_solution' => 'Menghadirkan personal branding berkecepatan tinggi dengan skor Google PageSpeed optimal.',
            'tags' => ['Laravel 13', 'Tailwind CSS v4', 'Alpine.js', 'Vite'],
            'image' => '/images/project-3.jpg',
            'github' => 'https://github.com/farhanpratama/webprofile-app',
            'demo' => '#',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Contact & Form Configuration
    |--------------------------------------------------------------------------
    */
    'contact' => [
        'form_endpoint' => 'https://formspree.io/f/your-form-id', // User can replace with their Formspree or Web3Forms key
        'socials' => [
            [
                'name' => 'GitHub',
                'url' => 'https://github.com/farhanpratama',
                'icon' => 'github',
            ],
            [
                'name' => 'LinkedIn',
                'url' => 'https://linkedin.com/in/farhanpratama',
                'icon' => 'linkedin',
            ],
            [
                'name' => 'WhatsApp',
                'url' => 'https://wa.me/6281234567890',
                'icon' => 'whatsapp',
            ],
            [
                'name' => 'Email',
                'url' => 'mailto:fahranpratama@gmail.com',
                'icon' => 'envelope',
            ],
        ],
    ],
];
