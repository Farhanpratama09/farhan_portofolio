<!DOCTYPE html>
<html lang="id" class="scroll-smooth" x-data :class="$store.darkMode.on ? 'dark' : ''">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Primary Meta Tags -->
    <title>{{ $portfolio['name'] }} — {{ $portfolio['role'] }} | Anime Dashboard UI</title>
    <meta name="title" content="{{ $portfolio['name'] }} — {{ $portfolio['role'] }}">
    <meta name="description" content="{{ $portfolio['tagline'] }}">
    <meta name="author" content="{{ $portfolio['name'] }}">
    <meta name="robots" content="index, follow">

    <!-- Google Fonts: M PLUS Rounded 1c & Quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;500;700;800;900&family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="{{ $portfolio['name'] }} — {{ $portfolio['role'] }}">
    <meta property="og:description" content="{{ $portfolio['tagline'] }}">

    <!-- Inline Script to Prevent Dark Mode Flash (FOUC) -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f4f6f9] text-slate-700 dark:bg-zinc-950 dark:text-zinc-100 font-sans antialiased transition-colors duration-300 min-h-screen flex flex-col selection:bg-sky-500 selection:text-white relative overflow-x-hidden">

    <!-- Top Ambient Star / Glow Light -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[800px] h-[350px] bg-gradient-to-b from-sky-200/40 via-sky-100/20 to-transparent dark:from-sky-950/30 dark:via-sky-900/10 dark:to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>

    {{ $slot }}

</body>
</html>
