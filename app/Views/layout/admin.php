<!DOCTYPE html>
<html lang="id"
    x-data="{ 
          sidebarOpen: false, 
          darkMode: localStorage.getItem('theme') === 'dark',
          toggleTheme() {
              this.darkMode = !this.darkMode;
              localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
          }
      }"
    :class="{ 'dark': darkMode }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Admin Panel') ?> — CMS Sekolah</title>

    <!-- Tailwind CSS v4 Browser Runtime -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        /* Konfigurasi Dark Mode berbasis class .dark pada Tailwind v4 */
        @custom-variant dark (&:where(.dark, .dark *));
        
        [x-cloak] { display: none !important; }
    </style>

    <!-- Alpine.js v3 -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <?= $this->renderSection('styles') ?>
</head>

<body class="bg-slate-50 text-slate-800 dark:bg-slate-950 dark:text-slate-100 antialiased selection:bg-indigo-500 selection:text-white">

    <?php
    // Helper deteksi rute aktif untuk styling menu sidebar
    $currentUri = uri_string();
    $navClass = function (string $prefix) use ($currentUri): string {
        $isActive = strpos($currentUri, $prefix) === 0;
        return $isActive
            ? 'bg-indigo-600 text-white font-semibold shadow-sm shadow-indigo-500/30'
            : 'text-slate-300 hover:bg-slate-800/80 hover:text-white';
    };
    ?>

    <div class="min-h-screen flex">

        <!-- Backdrop Gelap untuk Layar Mobile saat Sidebar Terbuka -->
        <div x-show="sidebarOpen"
            x-cloak
            x-transition:enter="transition-opacity ease-linear duration-200"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @click="sidebarOpen = false"
            class="fixed inset-0 z-40 bg-slate-900/60 backdrop-blur-xs lg:hidden">
        </div>

        <!-- Sidebar Navigasi (Fixed di Desktop, Slide-over Drawer di Mobile) -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed inset-y-0 left-0 z-50 w-64 bg-slate-900 text-slate-100 border-r border-slate-800 transform transition-transform duration-200 ease-in-out lg:translate-x-0 lg:static lg:inset-0 flex flex-col shrink-0">

            <!-- Logo & Brand -->
            <div class="h-16 flex items-center justify-between px-5 border-b border-slate-800">
                <a href="<?= base_url('admin/dashboard') ?>" class="flex items-center gap-2.5 text-white font-bold text-lg tracking-tight">
                    <span class="w-8 h-8 rounded-lg bg-indigo-600 flex items-center justify-center text-white shadow-md">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        </svg>
                    </span>
                    <span>CMS Sekolah</span>
                </a>

                <!-- Tombol Tutup Sidebar di Mobile -->
                <button @click="sidebarOpen = false" class="lg:hidden text-slate-400 hover:text-white p-1 rounded-md">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Daftar Menu Navigasi -->
            <nav class="flex-1 overflow-y-auto px-3 py-4 space-y-6 text-sm">

                <!-- Grup Utama -->
                <div>
                    <p class="px-3 mb-2 text-[11px] font-bold uppercase tracking-wider text-slate-400">Utama</p>
                    <a href="<?= base_url('admin/dashboard') ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors <?= $navClass('admin/dashboard') ?>">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </div>

                <!-- Grup Publikasi & Konten -->
                <div>
                    <p class="px-3 mb-2 text-[11px] font-bold uppercase tracking-wider text-slate-400">Publikasi & Konten</p>
                    <div class="space-y-1">
                        <a href="<?= base_url('admin/posts') ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors <?= $navClass('admin/posts') ?>">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                            <span>Berita & Artikel</span>
                        </a>

                        <a href="<?= base_url('admin/pages') ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors <?= $navClass('admin/pages') ?>">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span>Halaman Statis</span>
                        </a>

                        <a href="<?= base_url('admin/galleries') ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors <?= $navClass('admin/galleries') ?>">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>Galeri Kegiatan</span>
                        </a>
                    </div>
                </div>

                <!-- Grup Akademik -->
                <div>
                    <p class="px-3 mb-2 text-[11px] font-bold uppercase tracking-wider text-slate-400">Akademik</p>
                    <a href="<?= base_url('admin/teachers') ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors <?= $navClass('admin/teachers') ?>">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Data Guru & Staf</span>
                    </a>
                </div>

                <!-- Grup Tampilan & Sistem -->
                <div>
                    <p class="px-3 mb-2 text-[11px] font-bold uppercase tracking-wider text-slate-400">Tampilan & Sistem</p>
                    <div class="space-y-1">
                        <a href="<?= base_url('admin/menus') ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors <?= $navClass('admin/menus') ?>">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h10M4 18h14" />
                            </svg>
                            <span>Manajemen Menu</span>
                        </a>

                        <a href="<?= base_url('admin/settings') ?>" class="flex items-center gap-3 px-3 py-2.5 rounded-lg transition-colors <?= $navClass('admin/settings') ?>">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Pengaturan Sekolah</span>
                        </a>
                    </div>
                </div>

            </nav>
        </aside>

        <!-- Area Konten Utama -->
        <div class="flex-1 flex flex-col min-w-0">

            <!-- Topbar Header -->
            <header class="h-16 bg-white/90 dark:bg-slate-900/90 backdrop-blur-md border-b border-slate-200 dark:border-slate-800 sticky top-0 z-30 px-4 sm:px-6 flex items-center justify-between gap-4">

                <div class="flex items-center gap-3">
                    <!-- Tombol Hamburger Mobile -->
                    <button @click="sidebarOpen = true" class="lg:hidden p-2 rounded-lg text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <h1 class="text-base sm:text-lg font-semibold text-slate-800 dark:text-slate-100 truncate">
                        <?= esc($title ?? 'Panel Pengelola') ?>
                    </h1>
                </div>

                <!-- Kanan Topbar: Lihat Web, Toggle Dark Mode, Profil Dropdown -->
                <div class="flex items-center gap-2 sm:gap-3">

                    <a href="<?= base_url('/') ?>" target="_blank"
                        class="hidden sm:inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium rounded-lg border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800 transition">
                        <svg class="w-4 h-4 text-indigo-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                        </svg>
                        <span>Lihat Website</span>
                    </a>

                    <!-- Tombol Toggle Dark / Light Mode -->
                    <button @click="toggleTheme()"
                        title="Ganti Tema Gelap / Terang"
                        class="p-2 rounded-lg text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition">
                        <!-- Ikon Matahari (tampil saat dark mode) -->
                        <svg x-show="darkMode" x-cloak class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <!-- Ikon Bulan (tampil saat light mode) -->
                        <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>

                    <!-- Dropdown Profil Pengguna (Alpine.js) -->
                    <div class="relative" x-data="{ open: false }" @click.outside="open = false">
                        <button @click="open = !open" class="flex items-center gap-2.5 p-1 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition">
                            <div class="w-8 h-8 rounded-full bg-indigo-600 text-white flex items-center justify-center font-bold text-xs">
                                <?= strtoupper(substr(session()->get('user_name') ?? 'A', 0, 1)) ?>
                            </div>
                            <div class="hidden md:block text-left leading-tight">
                                <p class="text-xs font-semibold text-slate-800 dark:text-slate-100"><?= esc(session()->get('user_name') ?? 'Admin') ?></p>
                                <p class="text-[11px] text-slate-500 dark:text-slate-400"><?= esc(ucfirst(session()->get('user_role') ?? 'admin')) ?></p>
                            </div>
                            <svg class="w-4 h-4 text-slate-400 hidden md:block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Isi Menu Dropdown -->
                        <div x-show="open"
                            x-cloak
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 mt-2 w-48 bg-white dark:bg-slate-900 rounded-xl shadow-lg border border-slate-200 dark:border-slate-800 py-1.5 z-50 text-sm">

                            <a href="<?= base_url('admin/settings') ?>" class="flex items-center gap-2 px-4 py-2 text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800">
                                <span>Pengaturan Sekolah</span>
                            </a>
                            <div class="my-1 border-t border-slate-100 dark:border-slate-800"></div>
                            <a href="<?= base_url('logout') ?>" class="flex items-center gap-2 px-4 py-2 text-rose-600 dark:text-rose-400 hover:bg-rose-50 dark:hover:bg-rose-950/50 font-medium">
                                <span>Keluar (Logout)</span>
                            </a>
                        </div>
                    </div>

                </div>
            </header>

            <!-- Konten Dinamis Halaman -->
            <main class="flex-1 p-4 sm:p-6 lg:p-8 max-w-7xl w-full mx-auto">
                <?= $this->renderSection('content') ?>
            </main>

            <!-- Footer -->
            <footer class="bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800 py-3.5 px-6 text-xs text-slate-500 dark:text-slate-400 flex flex-col sm:flex-row items-center justify-between gap-2">
                <span>&copy; <?= date('Y') ?> CMS Portal Sekolah</span>
                <span>by Arus Media UTARA</span>
            </footer>

        </div>
    </div>

    <?= $this->renderSection('scripts') ?>
</body>

</html>