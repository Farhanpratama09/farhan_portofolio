<x-layout :portfolio="$portfolio">
    <!-- A. Top System Bar -->
    <x-navbar :portfolio="$portfolio" />

    <main id="main" class="flex-1">
        <!-- B. Hero: Kartu Karakter + Perkenalan (termasuk esensi About) -->
        <x-hero :portfolio="$portfolio" />

        <!-- C. Inventory Stack -->
        <x-skills :portfolio="$portfolio" />

        <!-- D. Proyek Pilihan -->
        <x-projects :portfolio="$portfolio" />

        <!-- E. Riwayat Pengalaman Kerja -->
        <x-experience :portfolio="$portfolio" />

        <!-- F. Correspondence Desk -->
        <x-contact :portfolio="$portfolio" />
    </main>

    <x-footer :portfolio="$portfolio" />
</x-layout>
