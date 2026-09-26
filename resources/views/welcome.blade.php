<x-layout :portfolio="$portfolio">
    <!-- Top Floating Navbar -->
    <x-navbar :portfolio="$portfolio" />

    <main class="flex-1 space-y-6 sm:space-y-8 pb-12">
        <!-- 1. Hero Banner Showcase -->
        <x-hero :portfolio="$portfolio" />

        <!-- 2. Featured Projects Gallery -->
        <x-projects :portfolio="$portfolio" />

        <!-- 3. Interactive Dashboard Widgets (Lofi Dev Beats & Core Capabilities) -->
        <x-dashboard-widgets :portfolio="$portfolio" />

        <!-- 4. Contact & Direct Connection -->
        <x-contact :portfolio="$portfolio" />
    </main>

    <!-- Footer Component -->
    <x-footer :portfolio="$portfolio" />
</x-layout>
