<!DOCTYPE html>
<html lang="id"
    x-data="{ 
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
    <title>Login Admin — CMS Sekolah</title>

    <!-- Tailwind CSS v4 Browser Runtime -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @custom-variant dark (&:where(.dark, .dark *));
        [x-cloak] { display: none !important; }
    </style>

    <!-- Alpine.js v3 -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="min-h-screen bg-slate-50 text-slate-800 dark:bg-slate-950 dark:text-slate-100 antialiased flex flex-col justify-center py-12 px-4 sm:px-6 lg:px-8 selection:bg-indigo-500 selection:text-white relative">

    <!-- Tombol Toggle Dark/Light Mode di Pojok Kanan Atas -->
    <div class="absolute top-4 right-4 sm:top-6 sm:right-6">
        <button @click="toggleTheme()"
            type="button"
            title="Ganti Tema Gelap / Terang"
            class="p-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 shadow-xs transition cursor-pointer">
            <svg x-show="darkMode" x-cloak class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            <svg x-show="!darkMode" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
            </svg>
        </button>
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <!-- Ikon & Judul Brand -->
        <div class="flex flex-col items-center">
            <div class="w-12 h-12 rounded-2xl bg-indigo-600 flex items-center justify-center text-white shadow-lg shadow-indigo-500/30 mb-4">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                </svg>
            </div>
            <h2 class="text-center text-2xl font-bold tracking-tight text-slate-900 dark:text-white">
                CMS Portal Sekolah
            </h2>
            <p class="mt-1.5 text-center text-sm text-slate-500 dark:text-slate-400">
                Masuk ke panel administrator untuk mengelola konten
            </p>
        </div>

        <!-- Card Form Login -->
        <div class="mt-8 bg-white dark:bg-slate-900 py-8 px-6 sm:px-10 shadow-sm rounded-2xl border border-slate-200 dark:border-slate-800"
            x-data="{ showPassword: false, submitting: false }">

            <!-- Alert Error Tunggal (Misal: Password Salah / Belum Login) -->
            <?php if (session()->getFlashdata('error')) : ?>
                <div x-data="{ open: true }" x-show="open" class="mb-5 flex items-center justify-between p-3.5 rounded-xl bg-rose-50 dark:bg-rose-950/50 border border-rose-200 dark:border-rose-800 text-rose-700 dark:text-rose-300 text-xs">
                    <span><?= esc(session()->getFlashdata('error')) ?></span>
                    <button @click="open = false" type="button" class="font-bold text-base leading-none ml-2">&times;</button>
                </div>
            <?php endif; ?>

            <!-- Alert Validasi Form (Array Errors) -->
            <?php if (session()->getFlashdata('errors')) : ?>
                <div class="mb-5 p-3.5 rounded-xl bg-rose-50 dark:bg-rose-950/50 border border-rose-200 dark:border-rose-800 text-rose-700 dark:text-rose-300 text-xs">
                    <ul class="list-disc list-inside space-y-1">
                        <?php foreach (session()->getFlashdata('errors') as $err) : ?>
                            <li><?= esc($err) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- Alert Sukses (Misal: Setelah Logout) -->
            <?php if (session()->getFlashdata('success')) : ?>
                <div x-data="{ open: true }" x-show="open" class="mb-5 flex items-center justify-between p-3.5 rounded-xl bg-emerald-50 dark:bg-emerald-950/50 border border-emerald-200 dark:border-emerald-800 text-emerald-700 dark:text-emerald-300 text-xs">
                    <span><?= esc(session()->getFlashdata('success')) ?></span>
                    <button @click="open = false" type="button" class="font-bold text-base leading-none ml-2">&times;</button>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('login') ?>" method="post" @submit="submitting = true" class="space-y-5">
                <?= csrf_field() ?>

                <!-- Input Email -->
                <div>
                    <label for="email" class="block text-xs font-semibold mb-1.5 text-slate-700 dark:text-slate-300">
                        Alamat Email
                    </label>
                    <input id="email"
                        name="email"
                        type="email"
                        value="<?= esc(old('email')) ?>"
                        required
                        autofocus
                        placeholder="admin@sekolah.sch.id"
                        class="w-full px-3.5 py-2.5 text-sm rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-slate-100 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">
                </div>

                <!-- Input Password dengan Toggle Show/Hide Alpine.js -->
                <div>
                    <label for="password" class="block text-xs font-semibold mb-1.5 text-slate-700 dark:text-slate-300">
                        Kata Sandi
                    </label>
                    <div class="relative">
                        <input id="password"
                            name="password"
                            :type="showPassword ? 'text' : 'password'"
                            required
                            placeholder="••••••••"
                            class="w-full pl-3.5 pr-10 py-2.5 text-sm rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 text-slate-900 dark:text-slate-100 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition">

                        <button type="button"
                            @click="showPassword = !showPassword"
                            tabindex="-1"
                            :title="showPassword ? 'Sembunyikan password' : 'Lihat password'"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 cursor-pointer">
                            <!-- Ikon Mata Terbuka -->
                            <svg x-show="!showPassword" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <!-- Ikon Mata Dicoret -->
                            <svg x-show="showPassword" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="pt-1">
                    <button type="submit"
                        :disabled="submitting"
                        class="w-full py-2.5 px-4 bg-indigo-600 hover:bg-indigo-700 disabled:opacity-60 text-white font-semibold text-sm rounded-xl shadow-sm shadow-indigo-500/25 transition flex items-center justify-center gap-2 cursor-pointer">
                        <svg x-show="submitting" x-cloak class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                        </svg>
                        <span x-text="submitting ? 'Memverifikasi...' : 'Masuk ke Dashboard'"></span>
                    </button>
                </div>
            </form>

            <!-- Tautan Kembali ke Beranda Sekolah -->
            <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800 text-center">
                <a href="<?= base_url('/') ?>" class="inline-flex items-center gap-1.5 text-xs font-medium text-slate-500 dark:text-slate-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 2