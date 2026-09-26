<x-layout :portfolio="$portfolio">
    <!-- Top Floating Navbar with Active Glowing Lamp Indicator -->
    <x-navbar :portfolio="$portfolio" />

    <main class="flex-1 space-y-6 sm:space-y-8 pb-12">
        <!-- 1. Hero Showcase Banner -->
        <x-hero :portfolio="$portfolio" />

        <!-- 2. Scalable Projects Showcase Gallery (Horizontal Slider + Grid Toggle) -->
        <x-projects :portfolio="$portfolio" />

        <!-- 3. Dedicated About & Engineering Philosophy Section -->
        <x-about :portfolio="$portfolio" />

        <!-- 4. Interactive Live Dashboard (Spinning Vinyl Lofi Player & Floating Stickers) -->
        <x-dashboard-widgets :portfolio="$portfolio" />

        <!-- 5. Contact Section -->
        <x-contact :portfolio="$portfolio" />
    </main>

    <!-- Footer Component -->
    <x-footer :portfolio="$portfolio" />
</x-layout>
