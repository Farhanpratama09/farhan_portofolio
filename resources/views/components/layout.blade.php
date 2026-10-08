@props(['portfolio'])

@php
    $pageTitle = $portfolio['name'] . ' — ' . $portfolio['role'] . ' (Laravel)';
    $pageDescription = $portfolio['tagline'];
    $canonical = url('/');
    $photoPath = $portfolio['photo'] ?? null;
    $ogImage = ($photoPath && file_exists(public_path($photoPath))) ? asset($photoPath) : null;
@endphp

<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>{{ $pageTitle }}</title>
    <meta name="title" content="{{ $pageTitle }}">
    <meta name="description" content="{{ $pageDescription }}">
    <meta name="author" content="{{ $portfolio['name'] }}">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#FAF7F2">
    <link rel="canonical" href="{{ $canonical }}">

    <!-- Open Graph (WhatsApp, LinkedIn, Facebook) -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="{{ $portfolio['name'] }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    @if ($ogImage)
        <meta property="og:image" content="{{ $ogImage }}">
    @endif

    <!-- Twitter / X -->
    <meta name="twitter:card" content="{{ $ogImage ? 'summary_large_image' : 'summary' }}">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $pageDescription }}">
    @if ($ogImage)
        <meta name="twitter:image" content="{{ $ogImage }}">
    @endif

    <!-- Google Fonts: Space Grotesk (heading), DM Sans (paragraf), JetBrains Mono (label teknis) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,700&family=JetBrains+Mono:wght@400;500;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="paper-grid text-ink font-sans antialiased min-h-screen flex flex-col overflow-x-hidden selection:bg-citypop selection:text-ink">

    <a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:top-2 focus:left-2 focus:z-[60] focus:px-3 focus:py-2 focus:bg-ink focus:text-paper focus:font-mono focus:text-xs">
        Lewati ke konten
    </a>

    {{ $slot }}

</body>
</html>
