<!DOCTYPE html>
<html lang="id" class="scroll-smooth" x-data :class="$store.darkMode.on ? 'dark' : ''">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Primary Meta Tags -->
    <title>{{ $portfolio['name'] }} — {{ $portfolio['role'] }}</title>
    <meta name="title" content="{{ $portfolio['name'] }} — {{ $portfolio['role'] }}">
    <meta name="description" content="{{ $portfolio['tagline'] }}">
    <meta name="author" content="{{ $portfolio['name'] }}">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook / LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="{{ $portfolio['name'] }} — {{ $portfolio['role'] }}">
    <meta property="og:description" content="{{ $portfolio['tagline'] }}">
    <meta property="og:image" content="{{ asset('images/og-preview.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="{{ $portfolio['name'] }} — {{ $portfolio['role'] }}">
    <meta property="twitter:description" content="{{ $portfolio['tagline'] }}">
    <meta property="twitter:image" content="{{ asset('images/og-preview.png') }}">

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
<body class="bg-zinc-50 text-zinc-800 dark:bg-zinc-950 dark:text-zinc-100 font-sans antialiased transition-colors duration-300 min-h-screen flex flex-col selection:bg-indigo-500 selection:text-white">
    
    {{ $slot }}

</body>
</html>
