<x-layout :portfolio="$portfolio">
    <!-- Navbar Component -->
    <x-navbar :portfolio="$portfolio" />

    <main class="flex-1">
        <!-- Hero Section -->
        <x-hero :portfolio="$portfolio" />

        <!-- About Section -->
        <x-about :portfolio="$portfolio" />

        <!-- Skills Section -->
        <x-skills :portfolio="$portfolio" />

        <!-- Projects Showcase Section -->
        <x-projects :portfolio="$portfolio" />

        <!-- Contact Section -->
        <x-contact :portfolio="$portfolio" />
    </main>

    <!-- Footer Component -->
    <x-footer :portfolio="$portfolio" />
</x-layout>
