<x-layout :portfolio="$portfolio">
    <!-- Top Navigation Bar -->
    <x-navbar :portfolio="$portfolio" />

    <main class="flex-1 space-y-6 sm:space-y-8 pb-12">
        <!-- Hero Banner Section (Genshin Layla Style) -->
        <x-hero :portfolio="$portfolio" />

        <!-- 3-Column Grid Dashboard (Projects, Tech Stack, Info Cards) -->
        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 items-start">
                <!-- Column 1: Featured Projects (Artwork / Monev) -->
                <x-projects :portfolio="$portfolio" />

                <!-- Column 2: Recent Tech Stack (Search Pills) -->
                <x-tech-stack :portfolio="$portfolio" />

                <!-- Column 3: Badges & Info Cards (Stickers + Info) -->
                <x-info-cards :portfolio="$portfolio" />
            </div>
        </section>

        <!-- Contact Section & Social Links -->
        <x-contact :portfolio="$portfolio" />
    </main>

    <!-- Footer Component -->
    <x-footer :portfolio="$portfolio" />
</x-layout>
