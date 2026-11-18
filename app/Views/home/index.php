<!DOCTYPE html>

<html class="scroll-smooth" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_standard" name="shell-type" />
    <title>SMK Pondok Modern Bina Insan</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Plus+Jakarta+Sans:wght@600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        @layer base {

            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main> :first-child {
                margin-top: 0 !important;
            }

            main> :last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script
        id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "surface-variant": "#d8e3fb",
                        "outline": "#6d7a72",
                        "surface-container-highest": "#d8e3fb",
                        "secondary-fixed": "#ffddb8",
                        "inverse-primary": "#68dba9",
                        "outline-variant": "#bccac0",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed-variant": "#005137",
                        "error-container": "#ffdad6",
                        "secondary-fixed-dim": "#ffb95f",
                        "on-primary-container": "#f5fff7",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-container": "#684000",
                        "primary-fixed-dim": "#68dba9",
                        "surface-container-low": "#f0f3ff",
                        "tertiary-fixed": "#cce5ff",
                        "secondary-container": "#fea619",
                        "tertiary": "#006194",
                        "error": "#ba1a1a",
                        "on-error-container": "#93000a",
                        "surface-tint": "#006c4a",
                        "on-error": "#ffffff",
                        "surface-container-high": "#dee8ff",
                        "surface-dim": "#cfdaf2",
                        "secondary": "#855300",
                        "on-tertiary": "#ffffff",
                        "on-background": "#111c2d",
                        "inverse-on-surface": "#ecf1ff",
                        "on-secondary-fixed": "#2a1700",
                        "primary-container": "#00855d",
                        "on-primary-fixed": "#002114",
                        "surface-container": "#e7eeff",
                        "on-primary": "#ffffff",
                        "on-surface-variant": "#3d4a42",
                        "tertiary-fixed-dim": "#93ccff",
                        "primary": "#006948",
                        "on-surface": "#111c2d",
                        "surface": "#f9f9ff",
                        "surface-bright": "#f9f9ff",
                        "on-tertiary-fixed-variant": "#004b73",
                        "primary-fixed": "#85f8c4",
                        "on-secondary-fixed-variant": "#653e00",
                        "background": "#f9f9ff",
                        "on-tertiary-fixed": "#001d31",
                        "inverse-surface": "#263143",
                        "on-tertiary-container": "#fdfcff",
                        "tertiary-container": "#007bb9"
                    },
                    borderRadius: {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "space-xs": "0.25rem",
                        "space-xl": "2.5rem",
                        "margin": "3rem",
                        "margin-mobile": "1.25rem",
                        "space-lg": "1.5rem",
                        "space-sm": "0.5rem",
                        "gutter": "1.5rem",
                        "space-md": "1rem",
                        "gutter-mobile": "1rem"
                    },
                    fontFamily: {
                        "label-lg": ["Plus Jakarta Sans"],
                        "label-md": ["Plus Jakarta Sans"],
                        "body-lg": ["Inter"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "body-md": ["Inter"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "display-hero": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "label-sm": ["Plus Jakarta Sans"],
                        "display-hero-mobile": ["Plus Jakarta Sans"],
                        "body-sm": ["Inter"]
                    },
                    fontSize: {
                        "label-lg": ["16px", {
                            lineHeight: "20px",
                            fontWeight: "600"
                        }],
                        "label-md": ["14px", {
                            lineHeight: "18px",
                            fontWeight: "600"
                        }],
                        "body-lg": ["18px", {
                            lineHeight: "28px",
                            fontWeight: "400"
                        }],
                        "headline-sm": ["20px", {
                            lineHeight: "28px",
                            fontWeight: "600"
                        }],
                        "body-md": ["16px", {
                            lineHeight: "24px",
                            fontWeight: "400"
                        }],
                        "headline-md": ["24px", {
                            lineHeight: "32px",
                            fontWeight: "700"
                        }],
                        "display-hero": ["56px", {
                            lineHeight: "64px",
                            fontWeight: "800"
                        }],
                        "headline-lg": ["40px", {
                            lineHeight: "48px",
                            fontWeight: "700"
                        }],
                        "headline-lg-mobile": ["28px", {
                            lineHeight: "36px",
                            fontWeight: "700"
                        }],
                        "label-sm": ["12px", {
                            lineHeight: "16px",
                            fontWeight: "700"
                        }],
                        "display-hero-mobile": ["36px", {
                            lineHeight: "44px",
                            fontWeight: "800"
                        }],
                        "body-sm": ["14px", {
                            lineHeight: "20px",
                            fontWeight: "400"
                        }]
                    }
                }
            }
        };
    </script>
</head>

<body
    class="bg-surface font-body-md text-on-surface antialiased min-h-screen flex flex-col selection:bg-primary-fixed selection:text-on-primary-fixed">
    <header
        class="fixed top-0 left-0 w-full z-50 bg-surface-container-lowest/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="h-20 max-w-7xl mx-auto px-gutter flex items-center justify-between gap-space-md">
            <div class="flex items-center gap-space-sm">
                <div
                    class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary shadow-sm">
                    <span class="material-symbols-outlined text-2xl">auto_stories</span>
                </div>
                <div class="flex flex-col"><span
                        class="font-headline-sm text-headline-sm text-primary tracking-tight leading-none">Bina
                        Insan</span><span
                        class="font-label-sm text-label-sm text-on-surface-variant tracking-wider uppercase leading-none mt-1">SMK
                        Pondok Modern</span></div>
            </div>
            <nav class="hidden xl:flex items-center gap-space-md" data-active-classes="text-primary font-bold"><a
                    aria-current="page" class="transition-colors py-space-xs text-primary font-bold" data-path="beranda"
                    href="#">Beranda</a><a
                    class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors py-space-xs"
                    data-path="jurusan-smk" href="#">Jurusan SMK</a><a
                    class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors py-space-xs"
                    data-path="program-tahfidz" href="#">Program Tahfidz</a><a
                    class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors py-space-xs"
                    data-path="kehidupan-asrama" href="#">Kehidupan Asrama</a><a
                    class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors py-space-xs"
                    data-path="fasilitas" href="#">Fasilitas</a><a
                    class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors py-space-xs"
                    data-path="biaya-dan-beasiswa" href="#">Biaya &amp; Beasiswa</a><a
                    class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors py-space-xs"
                    data-path="faq" href="#">FAQ</a></nav>
            <div class="flex items-center gap-space-sm"><a
                    class="hidden md:inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container-low text-primary hover:bg-surface-container-high transition-colors font-label-md text-label-md"
                    href="https://wa.me/" rel="noopener" target="_blank"><span
                        class="material-symbols-outlined text-base">chat</span><span>WhatsApp</span></a><a
                    class="inline-flex items-center justify-center px-space-lg py-space-xs rounded-full bg-secondary-container text-on-secondary-container hover:bg-secondary-fixed-dim transition-all shadow-sm font-label-md text-label-md"
                    data-path="daftar-ppdb" href="#">Daftar Sekarang (PPDB)</a><img alt="Profile"
                    class="w-8 h-8 rounded-full object-cover ml-space-xs ring-2 ring-primary/20"
                    src="https://lh3.googleusercontent.com/aida/ALJJyrAJmmxevPXg7zddhvdAfySQ01G7nDpXWwlvIc7DsGeVdUNbs7sHtkZ8BuAKzdI_5Ry9dNAsC2WPBpj4M_nyjtS1QG8mVSHYgChZ-Va1hTQD3V97HJw1tnUXk3-yZgmrXi8QZB9U-ouyvOl8CvFBG-6pMszSCotO1_jQ3WqNLGAB94XwDdFr6BTg9V3ASDwM4mRwyOn571o9VOJvXFU0skVKA7Dy_Ys7H9RP66TO2Dz3" />
            </div>
        </div>
    </header>
    <main class="w-full pt-20 flex-grow bg-surface">
        <div class="flex flex-col w-full">
            <!-- Dynamic Atmospheric Glows -->
            <div class="relative w-full overflow-hidden">
                <div
                    class="absolute -top-40 -left-40 w-96 h-96 bg-primary-fixed/20 rounded-full blur-3xl pointer-events-none -z-10">
                </div>
                <div
                    class="absolute top-96 -right-24 w-80 h-80 bg-secondary-fixed/30 rounded-full blur-3xl pointer-events-none -z-10">
                </div>
                <!-- 1. PPDB Announcement Bar -->
                <section class="max-w-7xl mx-auto px-gutter pt-space-md w-full">
                    <div
                        class="bg-surface-container-low rounded-full px-space-md py-space-xs flex items-center justify-between shadow-sm border border-primary/10">
                        <div class="flex items-center gap-space-sm min-w-0">
                            <span
                                class="inline-flex items-center justify-center px-space-sm py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm tracking-wide shrink-0">
                                INFO PPDB
                            </span>
                            <p class="font-body-sm text-body-sm text-on-surface truncate">
                                Penerimaan Santri Baru (PPDB) Tahun Ajaran 2025/2026 Dibuka — Kuota Terbatas per
                                Jurusan!
                            </p>
                        </div>
                        <a class="hidden sm:inline-flex items-center gap-1 font-label-md text-label-md text-primary hover:text-primary-container transition-colors shrink-0"
                            href="#daftar">
                            <span>Klaim Kuota</span>
                            <span class="material-symbols-outlined text-base">arrow_forward</span>
                        </a>
                    </div>
                </section>
                <!-- 2. Hero Section: Split 2-Column with Student Showcase -->
                <section class="max-w-7xl mx-auto px-gutter pt-space-xl pb-space-xl w-full">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-center">
                        <!-- Left Column: Narrative & Values -->
                        <div class="lg:col-span-7 flex flex-col gap-space-lg">
                            <div
                                class="inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-primary/10 text-primary w-fit">
                                <span class="material-symbols-outlined text-base"
                                    style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
                                <span class="font-label-sm text-label-sm uppercase tracking-wider">Kurikulum Industri
                                    4.0 &amp; Tahfidz Al-Qur'an</span>
                            </div>
                            <h1
                                class="font-display-hero text-display-hero text-on-surface tracking-tight leading-tight">
                                Cetak Generasi Unggul: <br class="hidden sm:inline" />
                                <span class="text-secondary-container">Jago IT</span> &amp;
                                <span class="text-primary">Hafal Qur'an</span>
                            </h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                                Sinergi pendidikan vokasi terapan berstandar global dengan keteladanan pondok pesantren
                                modern. Membentuk santri berkarakter Qurani, fasih berbahasa internasional, dan siap
                                terjun langsung ke industri digital dunia.
                            </p>
                            <div class="flex flex-wrap items-center gap-space-md pt-space-xs">
                                <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-space-sm rounded-full bg-secondary-container text-on-secondary-container hover:bg-secondary-fixed-dim transition-all shadow-md hover:shadow-lg font-label-lg text-label-lg"
                                    href="#daftar">
                                    <span>Daftar Sekarang (PPDB Online)</span>
                                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                                </a>
                                <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-space-sm rounded-full bg-surface-container-lowest text-primary hover:bg-surface-container-low transition-all shadow-sm font-label-lg text-label-lg"
                                    href="#brosur">
                                    <span class="material-symbols-outlined text-base">download_for_offline</span>
                                    <span>Unduh Brosur &amp; Rincian Biaya</span>
                                </a>
                            </div>
                            <!-- Trust stats metric strip -->
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-space-md pt-space-lg">
                                <div class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col">
                                    <span class="font-headline-lg text-headline-lg text-primary tracking-tight">3</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Jurusan Unggulan
                                        IT</span>
                                </div>
                                <div class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col">
                                    <span
                                        class="font-headline-lg text-headline-lg text-secondary tracking-tight">100%</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Keterserapan
                                        Kerja/Kuliah</span>
                                </div>
                                <div class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col">
                                    <span
                                        class="font-headline-lg text-headline-lg text-primary tracking-tight">30</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Juz Mutqin &amp;
                                        Bersanad</span>
                                </div>
                                <div class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col">
                                    <span
                                        class="font-headline-lg text-headline-lg text-secondary tracking-tight">A</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Akreditasi Unggul
                                        (BAN)</span>
                                </div>
                            </div>
                        </div>
                        <!-- Right Column: Visual Showcase -->
                        <div class="lg:col-span-5 relative mt-space-lg lg:mt-0">
                            <!-- Background Geometric Star Aura -->
                            <svg class="absolute -top-10 -right-10 w-72 h-72 text-primary opacity-5 -z-10 animate-spin"
                                fill="currentColor" style="animation-duration: 40s;" viewbox="0 0 100 100">
                                <path d="M50 0 L61 39 L100 50 L61 61 L50 100 L39 61 L0 50 L39 39 Z"></path>
                            </svg>
                            <!-- Main Image Container -->
                            <div
                                class="relative bg-surface-container-lowest p-space-xs rounded-3xl shadow-xl overflow-hidden group">
                                <img class="w-full h-[480px] object-cover rounded-2xl group-hover:scale-105 transition-transform duration-500 ease-out"
                                    data-alt="Modern Indonesian Islamic vocational high school students in modern computer lab wearing white hijabs and peci caps smiling and collaborating around a laptop with programming code and circuit schematics. Natural daylight streaming from grand windows overlooking modern Islamic architecture. Cinematic soft lighting with crisp emerald and warm amber tones."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIIvGN9zUQoZdO63W31bTDVVB4yPhCf3fumD14NafR3V8DVnfsxsrCdHSawkYxVEGUeiQTf6Q4uvjxyJ_oxftGOs1ozExFjHIRYH2dl7iGvg-2PLcAN5zAHk6Oif_Qy46ZYSKHXc90jD6fyS5pRrrqAJ9VVHQ7wSFCZ-rm0BN14KYUlBh5iPW3bD2CAvXs8Bvhfsx0h36a9CxBS6gJYDE5WDXQRXMXeFmPv2yR3DE" />
                                <!-- Floating Glassmorphism Badge 1 -->
                                <div
                                    class="absolute top-6 left-6 bg-surface-container-lowest/90 backdrop-blur-md px-space-md py-space-xs rounded-full shadow-md flex items-center gap-space-xs">
                                    <span class="w-2.5 h-2.5 rounded-full bg-primary animate-pulse"></span>
                                    <span class="font-label-sm text-label-sm text-on-surface">Lab Berstandar
                                        Enterprise</span>
                                </div>
                                <!-- Floating Glassmorphism Badge 2 -->
                                <div
                                    class="absolute bottom-6 left-6 right-6 bg-surface-container-lowest/95 backdrop-blur-md p-space-md rounded-2xl shadow-lg flex items-center justify-between">
                                    <div class="flex items-center gap-space-sm">
                                        <div
                                            class="w-10 h-10 rounded-full bg-secondary-container/30 flex items-center justify-center text-secondary">
                                            <span class="material-symbols-outlined text-xl"
                                                style="font-variation-settings: 'FILL' 1;">menu_book</span>
                                        </div>
                                        <div>
                                            <h4 class="font-label-md text-label-md text-on-surface">Hafalan 5 - 30 Juz
                                            </h4>
                                            <p class="font-body-sm text-body-sm text-on-surface-variant">Metode Talaqqi
                                                &amp; Sanad Rasmi</p>
                                        </div>
                                    </div>
                                    <span
                                        class="font-label-sm text-label-sm px-space-sm py-1 bg-primary/10 text-primary rounded-full">
                                        Bersanad
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- 3. Key Highlights: Mengapa Memilih Kami -->
                <section class="max-w-7xl mx-auto px-gutter py-space-xl w-full">
                    <div class="flex flex-col items-center text-center gap-space-xs max-w-3xl mx-auto mb-space-xl">
                        <span
                            class="font-label-sm text-label-sm text-primary uppercase tracking-widest bg-primary/10 px-space-md py-1 rounded-full">Kelebihan
                            Bina Insan</span>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface">Pilar Ekosistem Pesantren Masa
                            Depan</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">Mengharmoniskan kecakapan
                            hard-skill industri terkini dengan pembinaan adab santri yang kokoh selama 24 jam penuh.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
                        <!-- Card 1 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col gap-space-sm group">
                            <div
                                class="w-12 h-12 rounded-2xl bg-primary-container flex items-center justify-center text-on-primary group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-2xl">device_hub</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface">Kurikulum Merdeka + Pesantren
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Integrasi kurikulum kejuruan nasional berbasis proyek nyata dengan kurikulum
                                kepesantrenan Kulliyatul Mu'allimin yang mendalam.
                            </p>
                        </div>
                        <!-- Card 2 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col gap-space-sm group">
                            <div
                                class="w-12 h-12 rounded-2xl bg-secondary-container flex items-center justify-center text-on-secondary-container group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-2xl">apartment</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface">Asrama Modern &amp; Nyaman
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Kamar ber-AC yang higienis, pengawasan muaddib 24 jam, pemenuhan nutrisi seimbang 3x
                                makan higienis, dan sarana rekreasi santri terpadu.
                            </p>
                        </div>
                        <!-- Card 3 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col gap-space-sm group">
                            <div
                                class="w-12 h-12 rounded-2xl bg-primary-container flex items-center justify-center text-on-primary group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-2xl">translate</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface">Bilingual &amp; Tahfidz Harian
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Lingkungan percakapan harian Bahasa Arab dan Inggris aktif berpasangan dengan halaqah
                                tahfidz terarah dengan target mutqin 5-30 juz.
                            </p>
                        </div>
                        <!-- Card 4 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col gap-space-sm group">
                            <div
                                class="w-12 h-12 rounded-2xl bg-secondary-container flex items-center justify-center text-on-secondary-container group-hover:scale-110 transition-transform">
                                <span class="material-symbols-outlined text-2xl">rocket_launch</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface">Siap Kerja &amp; Kuliah Global
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Penyaluran magang industri top-tier, inkubasi santripreneur binaan alumni, serta
                                bimbingan intensif tembus beasiswa PTN &amp; Timur Tengah.
                            </p>
                        </div>
                    </div>
                </section>
                <!-- 4. Pilihan Jurusan Vokasi Unggulan -->
                <section class="max-w-7xl mx-auto px-gutter py-space-xl w-full">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md mb-space-xl">
                        <div class="flex flex-col gap-space-xs max-w-xl">
                            <span
                                class="font-label-sm text-label-sm text-primary uppercase tracking-widest bg-primary/10 px-space-md py-1 rounded-full w-fit">Keahlian
                                Industri</span>
                            <h2 class="font-headline-lg text-headline-lg text-on-surface">3 Program Keahlian Digital
                                Unggulan</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">Dirancang bersama praktisi
                                industri teknologi terkemuka untuk menjawab kebutuhan talenta digital berintegritas
                                tinggi.</p>
                        </div>
                        <div class="flex items-center gap-space-xs">
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Sertifikasi Global:</span>
                            <span
                                class="px-space-xs py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-primary">Cisco</span>
                            <span
                                class="px-space-xs py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-primary">MikroTik</span>
                            <span
                                class="px-space-xs py-0.5 rounded bg-surface-container font-label-sm text-label-sm text-primary">AWS</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
                        <!-- Jurusan 1: TKJ -->
                        <div
                            class="bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                            <div class="relative h-56 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="High school student technician in neat Islamic boarding school uniform configuring server rack and fiber optic patch cables in a modern server lab with blue indicator lights and clean aesthetic."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBikOjneg7hoBKOKEQMTFyt9m25HkoKGxoGu-rZDYsMB1aRPX9p_kiZonwXh-9dIwf9F2Nti9skf0_1kYn-nXFLcAHdt2HapnS6NqSCAALNj1IAJuSjZrmO88I251pHqVvMnXdw9HWCq5ewXxLFiGbhtTXaUPRmhHWZy_HXMh5yEzfhgHTU8awtm9Z1FRJFR61VPwFKLJb41450L71kzNeG2imSpq4uBkQ918nzXNc" />
                                <div
                                    class="absolute top-4 left-4 bg-primary text-on-primary font-label-sm text-label-sm px-space-sm py-1 rounded-full shadow">
                                    TKJ &amp; Cloud Network
                                </div>
                            </div>
                            <div class="p-space-lg flex flex-col flex-grow justify-between gap-space-md">
                                <div class="flex flex-col gap-space-sm">
                                    <h3 class="font-headline-md text-headline-md text-on-surface">Teknik Komputer &amp;
                                        Jaringan</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Penguasaan arsitektur jaringan skala besar, cyber security dasar, cloud
                                        infrastructure management, dan konfigurasi server Linux/MikroTik.
                                    </p>
                                    <div class="flex flex-wrap gap-space-xs pt-space-xs">
                                        <span
                                            class="px-space-sm py-1 bg-surface-container-low text-primary font-label-sm text-label-sm rounded-full">MikroTik
                                            MTCNA</span>
                                        <span
                                            class="px-space-sm py-1 bg-surface-container-low text-primary font-label-sm text-label-sm rounded-full">Cisco
                                            CCNA Prep</span>
                                        <span
                                            class="px-space-sm py-1 bg-surface-container-low text-primary font-label-sm text-label-sm rounded-full">AWS
                                            Cloud</span>
                                    </div>
                                </div>
                                <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-primary hover:text-primary-container transition-colors pt-space-xs"
                                    href="#jurusan">
                                    <span>Lihat Silabus Lengkap</span>
                                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <!-- Jurusan 2: DKV -->
                        <div
                            class="bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                            <div class="relative h-56 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Young female student wearing clean Islamic headscarf working on digital illustration and 3D UI UX wireframes on a graphics tablet in a bright creative studio with moodboards in background."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3lspkfufpifPN0WEC1Lx468MftixhljRzyRBYeWF7fJQLZHm4YtBQrCP09bgiDj5vVFsVDaoXp9S7Ras89MZVT9yqxo9TZBgyF9cCf7lUFYJP0aIB1USvPzXP6rCLF7Vb63SGxozYhmroU8t76tAuRWAW9Qrigb1n3ukFU78kVSyPzEQ_fYaWMY5RwKUn3Lqjcvg18Ymt08TZ81jpWOyQQ7zOTegpQw_7gjwJcEk" />
                                <div
                                    class="absolute top-4 left-4 bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-space-sm py-1 rounded-full shadow">
                                    DKV &amp; Multimedia
                                </div>
                            </div>
                            <div class="p-space-lg flex flex-col flex-grow justify-between gap-space-md">
                                <div class="flex flex-col gap-space-sm">
                                    <h3 class="font-headline-md text-headline-md text-on-surface">Desain Komunikasi
                                        Visual</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Produksi konten kreatif digital bernilai dakwah dan komersial: UI/UX design,
                                        motion graphic, sinematografi video, branding korporat, dan 3D visual.
                                    </p>
                                    <div class="flex flex-wrap gap-space-xs pt-space-xs">
                                        <span
                                            class="px-space-sm py-1 bg-surface-container-low text-secondary font-label-sm text-label-sm rounded-full">Adobe
                                            Suite</span>
                                        <span
                                            class="px-space-sm py-1 bg-surface-container-low text-secondary font-label-sm text-label-sm rounded-full">Figma
                                            UI/UX</span>
                                        <span
                                            class="px-space-sm py-1 bg-surface-container-low text-secondary font-label-sm text-label-sm rounded-full">Blender
                                            3D</span>
                                    </div>
                                </div>
                                <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-primary hover:text-primary-container transition-colors pt-space-xs"
                                    href="#jurusan">
                                    <span>Lihat Silabus Lengkap</span>
                                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <!-- Jurusan 3: Bisnis Digital -->
                        <div
                            class="bg-surface-container-lowest rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                            <div class="relative h-56 overflow-hidden">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Indonesian Islamic high school students presenting e-commerce marketplace analytics and revenue charts on a large digital smartboard in an entrepreneurship incubator room."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBkG3rQ0btei03tuj1kxp4WPsU1oJ3JJw76GMuNqc-yUxb8Jv8AmC9Uj0XU6XxvOqKQLvegz8WTCVwzyWlsC6HQI3KfvLdpBqyf2Ibc2F4aXbx6gNdXxEyDeAfk4fquVx2eHsw1b_XeJ5KvzbHq1poSFVmj6Fclvajkl-grO0dZvuK_CNfL54sM9OxPzKJwNswo91n3A06tJuz_bwMXMPs4JxTreUMuPAhyQXrDTZY" />
                                <div
                                    class="absolute top-4 left-4 bg-tertiary-container text-on-tertiary-container font-label-sm text-label-sm px-space-sm py-1 rounded-full shadow">
                                    Bisnis Digital Santri
                                </div>
                            </div>
                            <div class="p-space-lg flex flex-col flex-grow justify-between gap-space-md">
                                <div class="flex flex-col gap-space-sm">
                                    <h3 class="font-headline-md text-headline-md text-on-surface">Bisnis &amp; Marketing
                                        Digital</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Kecakapan e-commerce strategy, data analysis penjualan, performance marketing di
                                        media sosial, copy-writing persuasif, dan etika muamalah syariah.
                                    </p>
                                    <div class="flex flex-wrap gap-space-xs pt-space-xs">
                                        <span
                                            class="px-space-sm py-1 bg-surface-container-low text-tertiary font-label-sm text-label-sm rounded-full">Google
                                            Analytics</span>
                                        <span
                                            class="px-space-sm py-1 bg-surface-container-low text-tertiary font-label-sm text-label-sm rounded-full">E-Commerce
                                            Op</span>
                                        <span
                                            class="px-space-sm py-1 bg-surface-container-low text-tertiary font-label-sm text-label-sm rounded-full">Digital
                                            Ads</span>
                                    </div>
                                </div>
                                <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-primary hover:text-primary-container transition-colors pt-space-xs"
                                    href="#jurusan">
                                    <span>Lihat Silabus Lengkap</span>
                                    <span class="material-symbols-outlined text-base">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- 5. Keseharian Santri Modern 24 Jam (Interactive Bento Grid) -->
                <section class="max-w-7xl mx-auto px-gutter py-space-xl w-full">
                    <div class="bg-surface-container-low rounded-3xl p-space-lg lg:p-space-xl shadow-sm">
                        <div class="max-w-2xl mb-space-lg">
                            <span
                                class="font-label-sm text-label-sm text-primary uppercase tracking-widest bg-surface-container-lowest px-space-md py-1 rounded-full shadow-sm">Jadwal
                                Harian Terstruktur</span>
                            <h2 class="font-headline-lg text-headline-lg text-on-surface mt-space-xs">Harmoni 24 Jam
                                Kehidupan Santri</h2>
                            <p class="font-body-md text-body-md text-on-surface-variant">Disiplin yang menumbuhkan
                                kemandirian, ibadah tepat waktu, serta eksplorasi teknologi tanpa batas.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-md">
                            <!-- Timeline Card 1 -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col gap-space-xs hover:-translate-y-1 transition-transform">
                                <span class="font-label-sm text-label-sm text-secondary font-bold">04:00 - 06:30</span>
                                <div class="flex items-center gap-2 text-primary">
                                    <span class="material-symbols-outlined text-xl">mosque</span>
                                    <h4 class="font-headline-sm text-headline-sm text-on-surface">Subuh &amp; Kultum
                                    </h4>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Qiyamul lail, shalat subuh berjamaah, dilanjutkan kultum santri dalam dua bahasa
                                    (Arab-Inggris).
                                </p>
                            </div>
                            <!-- Timeline Card 2 -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col gap-space-xs hover:-translate-y-1 transition-transform">
                                <span class="font-label-sm text-label-sm text-primary font-bold">07:30 - 15:30</span>
                                <div class="flex items-center gap-2 text-primary">
                                    <span class="material-symbols-outlined text-xl">computer</span>
                                    <h4 class="font-headline-sm text-headline-sm text-on-surface">Vokasi &amp; Lab</h4>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Sesi akademis kejuruan, praktikum lab komputer industri, dan pengerjaan
                                    project-based learning.
                                </p>
                            </div>
                            <!-- Timeline Card 3 -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col gap-space-xs hover:-translate-y-1 transition-transform">
                                <span class="font-label-sm text-label-sm text-secondary font-bold">16:00 - 17:30</span>
                                <div class="flex items-center gap-2 text-secondary">
                                    <span class="material-symbols-outlined text-xl">sports_soccer</span>
                                    <h4 class="font-headline-sm text-headline-sm text-on-surface">Eskul Sunnah</h4>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Panahan sunnah, futsal, beladiri silat, robotika, dan kegiatan pengembangan minat
                                    bakat.
                                </p>
                            </div>
                            <!-- Timeline Card 4 -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col gap-space-xs hover:-translate-y-1 transition-transform">
                                <span class="font-label-sm text-label-sm text-primary font-bold">18:30 - 20:00</span>
                                <div class="flex items-center gap-2 text-primary">
                                    <span class="material-symbols-outlined text-xl">import_contacts</span>
                                    <h4 class="font-headline-sm text-headline-sm text-on-surface">Halaqah Tahfidz</h4>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Setoran ziyadah hafalan baru, muraja'ah kelompok dengan ustadz sanad, serta kajian
                                    kitab turats.
                                </p>
                            </div>
                            <!-- Timeline Card 5 -->
                            <div
                                class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col gap-space-xs hover:-translate-y-1 transition-transform">
                                <span class="font-label-sm text-label-sm text-tertiary font-bold">20:30 - 22:00</span>
                                <div class="flex items-center gap-2 text-tertiary">
                                    <span class="material-symbols-outlined text-xl">terminal</span>
                                    <h4 class="font-headline-sm text-headline-sm text-on-surface">Coding &amp; Study
                                    </h4>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Night Coding Club mandiri di lab atau percakapan asrama sebelum istirahat malam
                                    teratur.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- 6. Testimoni Nyata Wali Santri & Alumni -->
                <section class="max-w-7xl mx-auto px-gutter py-space-xl w-full">
                    <div class="text-center max-w-2xl mx-auto mb-space-xl">
                        <span
                            class="font-label-sm text-label-sm text-primary uppercase tracking-widest bg-primary/10 px-space-md py-1 rounded-full">Kisah
                            Nyata</span>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface mt-space-xs">Dipercaya Ribuan Orang
                            Tua &amp; Industri</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">Kisah transformasi santri menjadi
                            teknisi handal dan pribadi yang shaleh berbakti.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                        <!-- Testi 1 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between gap-space-md">
                            <div class="flex flex-col gap-space-xs">
                                <div class="flex text-secondary-container">
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant italic">
                                    "Awalnya ragu apakah anak saya bisa seimbang antara menghafal Al-Qur'an dan belajar
                                    komputer. Ternyata di SMK Bina Insan keduanya berjalan selaras. Anak saya hafal 8
                                    Juz dan sudah mengantongi sertifikat Cisco!"
                                </p>
                            </div>
                            <div class="flex items-center gap-space-sm pt-space-xs">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center font-headline-sm text-headline-sm text-primary">
                                    HA
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-label-md text-label-md text-on-surface">H. Ahmad Fauzi</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Wali Santri Angkatan
                                        2023 (Jakarta)</span>
                                </div>
                            </div>
                        </div>
                        <!-- Testi 2 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between gap-space-md">
                            <div class="flex flex-col gap-space-xs">
                                <div class="flex text-secondary-container">
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant italic">
                                    "Lulus dari jurusan TKJ, saya langsung diterima sebagai Junior Cloud Engineer di
                                    software house Jakarta sekaligus melanjutkan kuliah beasiswa. Kebiasaan tahajud dan
                                    adab di asrama sangat membentuk mental profesional saya."
                                </p>
                            </div>
                            <div class="flex items-center gap-space-sm pt-space-xs">
                                <div
                                    class="w-12 h-12 rounded-full bg-secondary-container/20 flex items-center justify-center font-headline-sm text-headline-sm text-secondary">
                                    MR
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-label-md text-label-md text-on-surface">Muhammad Rizky,
                                        S.Tr.Kom</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Alumni 2021 (Cloud
                                        Engineer)</span>
                                </div>
                            </div>
                        </div>
                        <!-- Testi 3 -->
                        <div
                            class="bg-surface-container-lowest p-space-lg rounded-2xl shadow-sm hover:shadow-md transition-all flex flex-col justify-between gap-space-md">
                            <div class="flex flex-col gap-space-xs">
                                <div class="flex text-secondary-container">
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                    <span class="material-symbols-outlined text-lg"
                                        style="font-variation-settings: 'FILL' 1;">star</span>
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant italic">
                                    "Keluarga kami merasa tenang menyekolahkan putri kami di asrama putri yang sangat
                                    terjaga aurat dan pergaulannya, namun tetap dibekali kemampuan desain UI/UX dan
                                    animasi yang sangat canggih."
                                </p>
                            </div>
                            <div class="flex items-center gap-space-sm pt-space-xs">
                                <div
                                    class="w-12 h-12 rounded-full bg-primary/20 flex items-center justify-center font-headline-sm text-headline-sm text-primary">
                                    SN
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-label-md text-label-md text-on-surface">Ibu Siti Nurhaliza</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Wali Santriwati
                                        (Bandung)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- 7. Mitra Industri & Akreditasi Resmi -->
                <section class="max-w-7xl mx-auto px-gutter py-space-lg w-full">
                    <div
                        class="bg-surface-container-low rounded-2xl p-space-lg flex flex-col md:flex-row items-center justify-between gap-space-lg">
                        <div class="flex flex-col gap-1 max-w-xs text-center md:text-left">
                            <span class="font-label-md text-label-md text-on-surface font-bold">Kolaborasi Industri
                                &amp; Akreditasi</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Sertifikasi kompetensi resmi
                                berstandar nasional dan internasional</span>
                        </div>
                        <div
                            class="flex flex-wrap items-center justify-center gap-space-lg opacity-80 grayscale hover:grayscale-0 transition-all">
                            <div class="flex items-center gap-2 font-headline-sm text-headline-sm text-on-surface">
                                <span class="material-symbols-outlined text-primary text-2xl">verified_user</span>
                                <span>Kemendikbudristek</span>
                            </div>
                            <div class="flex items-center gap-2 font-headline-sm text-headline-sm text-on-surface">
                                <span class="material-symbols-outlined text-primary text-2xl">school</span>
                                <span>Kemenag RI</span>
                            </div>
                            <div class="flex items-center gap-2 font-headline-sm text-headline-sm text-on-surface">
                                <span class="material-symbols-outlined text-secondary text-2xl">network_check</span>
                                <span>Cisco Academy</span>
                            </div>
                            <div class="flex items-center gap-2 font-headline-sm text-headline-sm text-on-surface">
                                <span class="material-symbols-outlined text-primary text-2xl">router</span>
                                <span>MikroTik</span>
                            </div>
                            <div class="flex items-center gap-2 font-headline-sm text-headline-sm text-on-surface">
                                <span class="material-symbols-outlined text-tertiary text-2xl">cloud</span>
                                <span>AWS Educate</span>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- 8. FAQ: Pertanyaan Sering Diajukan -->
                <section class="max-w-7xl mx-auto px-gutter py-space-xl w-full">
                    <div class="text-center max-w-2xl mx-auto mb-space-xl">
                        <span
                            class="font-label-sm text-label-sm text-primary uppercase tracking-widest bg-primary/10 px-space-md py-1 rounded-full">Tanya
                            Jawab</span>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface mt-space-xs">Pertanyaan Yang Sering
                            Diajukan</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">Semua informasi penting seputar
                            pendaftaran santri baru dan kehidupan di pondok modern.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <!-- FAQ 1 -->
                        <div
                            class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col gap-space-xs">
                            <h4 class="font-headline-sm text-headline-sm text-on-surface flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary mt-1">help_outline</span>
                                <span>Apakah calon santri harus sudah punya hafalan sebelum mendaftar?</span>
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant pl-8">
                                Tidak harus. Kami menyediakan kelas matrikulasi tahsin dan makharijul huruf dari dasar.
                                Yang diutamakan adalah kemauan kuat santri untuk belajar dan beradab baik.
                            </p>
                        </div>
                        <!-- FAQ 2 -->
                        <div
                            class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col gap-space-xs">
                            <h4 class="font-headline-sm text-headline-sm text-on-surface flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary mt-1">help_outline</span>
                                <span>Bagaimana aturan penggunaan gadget atau laptop bagi santri?</span>
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant pl-8">
                                Laptop digunakan secara terarah di laboratorium komputasi dan ruang belajar pada jam
                                pembelajaran vokasi serta coding session di bawah supervisi mentor IT. Di luar itu,
                                gawai disimpan rapi di loker pengelola.
                            </p>
                        </div>
                        <!-- FAQ 3 -->
                        <div
                            class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col gap-space-xs">
                            <h4 class="font-headline-sm text-headline-sm text-on-surface flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary mt-1">help_outline</span>
                                <span>Apakah tersedia skema beasiswa bagi calon santri berprestasi?</span>
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant pl-8">
                                Ya, tersedia Beasiswa Tahfidz (minimal 5 Juz mutqin), Beasiswa Juara OSN/LKS Vokasi,
                                serta Beasiswa Afirmasi Yatim Du'afa berprestasi dengan pembebasan biaya hingga 100%.
                            </p>
                        </div>
                        <!-- FAQ 4 -->
                        <div
                            class="bg-surface-container-lowest p-space-md rounded-2xl shadow-sm flex flex-col gap-space-xs">
                            <h4 class="font-headline-sm text-headline-sm text-on-surface flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary mt-1">help_outline</span>
                                <span>Apakah santri lulusan SMK Bina Insan bisa melanjutkan ke Perguruan Tinggi?</span>
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant pl-8">
                                Sangat bisa. Lulusan kami memegang ijazah formal SMK Negeri/Swasta yang diakui
                                Kemendikbudristek untuk jalur SNBP/SNBT, kedinasan, maupun beasiswa studi Islam ke
                                Universitas Al-Azhar Kairo dan Madinah.
                            </p>
                        </div>
                    </div>
                </section>
                <!-- 9. Big Banner CTA PPDB Early Bird -->
                <section class="max-w-7xl mx-auto px-gutter pt-space-md pb-space-xl w-full" id="daftar">
                    <div
                        class="relative bg-primary rounded-3xl p-space-lg md:p-space-xl overflow-hidden shadow-xl text-on-primary">
                        <!-- Background Decorative Pattern -->
                        <div
                            class="absolute -right-20 -bottom-20 w-96 h-96 bg-primary-container rounded-full opacity-40 blur-2xl pointer-events-none">
                        </div>
                        <svg class="absolute top-0 right-0 w-80 h-80 opacity-5 pointer-events-none" fill="currentColor"
                            viewbox="0 0 100 100">
                            <polygon points="50,0 60,35 95,35 68,57 78,92 50,70 22,92 32,57 5,35 40,35"></polygon>
                        </svg>
                        <div class="relative z-10 max-w-3xl flex flex-col gap-space-md">
                            <div
                                class="inline-flex items-center gap-space-xs px-space-md py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm w-fit shadow">
                                <span class="material-symbols-outlined text-base">local_offer</span>
                                <span>Promo Early Bird Gelombang I — Potongan Biaya Masuk 30%</span>
                            </div>
                            <h2 class="font-headline-lg text-headline-lg text-on-primary">
                                Siapkan Masa Depan Digital Anak Anda Bersama Nilai-Nilai Al-Qur'an
                            </h2>
                            <p class="font-body-lg text-body-lg text-on-primary/90">
                                Pendaftaran dibuka untuk kuota terbatas 120 santri baru tahun ajaran 2025/2026. Lakukan
                                pendaftaran awal sekarang untuk mendapatkan jadwal seleksi dan peminatan jurusan
                                prioritas.
                            </p>
                            <div class="flex flex-wrap items-center gap-space-md pt-space-xs">
                                <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-space-sm rounded-full bg-secondary-container text-on-secondary-container hover:bg-secondary-fixed-dim transition-all shadow-md font-label-lg text-label-lg"
                                    href="https://wa.me/" rel="noopener" target="_blank">
                                    <span>Isi Formulir Online PPDB</span>
                                    <span class="material-symbols-outlined text-base">edit_document</span>
                                </a>
                                <a class="inline-flex items-center justify-center gap-space-xs px-space-lg py-space-sm rounded-full bg-surface-container-lowest/20 hover:bg-surface-container-lowest/30 backdrop-blur text-on-primary transition-all font-label-lg text-label-lg"
                                    href="https://wa.me/" rel="noopener" target="_blank">
                                    <span class="material-symbols-outlined text-base">chat</span>
                                    <span>Konsultasi WhatsApp Panitia</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <footer
        class="w-full bg-surface-container-low mt-auto pt-space-xl pb-space-lg shadow-[0_-1px_8px_rgba(0,0,0,0.02)]">
        <div class="max-w-7xl mx-auto px-gutter">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-gutter pb-space-xl">
                <div class="lg:col-span-2 flex flex-col gap-space-md">
                    <div class="flex items-center gap-space-sm">
                        <div
                            class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary">
                            <span class="material-symbols-outlined text-2xl">auto_stories</span>
                        </div>
                        <div class="flex flex-col"><span
                                class="font-headline-sm text-headline-sm text-primary tracking-tight">SMK Pondok Modern
                                Bina Insan</span><span
                                class="font-body-sm text-body-sm text-on-surface-variant">Integrasi IMTAQ &amp; IPTEK
                                Vokasi Unggulan</span></div>
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant max-w-sm">Lembaga pendidikan vokasi
                        pesantren modern yang mencetak generasi technopreneur berkarakter Qurani, terampil di bidang
                        teknologi terapan, dan berakhlakul karimah siap bersaing global.</p>
                    <div
                        class="inline-flex items-center gap-space-sm px-space-md py-space-xs rounded-full bg-surface-container-lowest text-primary font-label-sm text-label-sm w-fit shadow-sm">
                        <span class="material-symbols-outlined text-primary text-base">verified</span><span>BAN-SM:
                            Terakreditasi A (Unggul)</span>
                    </div>
                </div>
                <div class="flex flex-col gap-space-sm"><span
                        class="font-label-lg text-label-lg text-on-surface">Program Pendidikan</span>
                    <ul class="flex flex-col gap-space-xs font-body-sm text-body-sm text-on-surface-variant">
                        <li><a class="hover:text-primary transition-colors" data-path="jurusan-smk" href="#">Rekayasa
                                Perangkat Lunak</a></li>
                        <li><a class="hover:text-primary transition-colors" data-path="jurusan-smk" href="#">Teknik
                                Komputer &amp; Jaringan</a></li>
                        <li><a class="hover:text-primary transition-colors" data-path="jurusan-smk" href="#">Agribisnis
                                Digital Modern</a></li>
                        <li><a class="hover:text-primary transition-colors" data-path="program-tahfidz" href="#">Tahfidz
                                30 Juz Bersanad</a></li>
                        <li><a class="hover:text-primary transition-colors" data-path="program-tahfidz" href="#">Dirasah
                                Islamiyah &amp; Bahasa</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-space-sm"><span
                        class="font-label-lg text-label-lg text-on-surface">Informasi &amp; Pendaftaran</span>
                    <ul class="flex flex-col gap-space-xs font-body-sm text-body-sm text-on-surface-variant">
                        <li><a class="hover:text-primary transition-colors" data-path="daftar-ppdb" href="#">Pendaftaran
                                Santri Baru (PPDB)</a></li>
                        <li><a class="hover:text-primary transition-colors" data-path="biaya-dan-beasiswa"
                                href="#">Rincian Biaya Pendidikan</a></li>
                        <li><a class="hover:text-primary transition-colors" data-path="biaya-dan-beasiswa"
                                href="#">Beasiswa Prestasi &amp; Yatim</a></li>
                        <li><a class="hover:text-primary transition-colors" data-path="kehidupan-asrama" href="#">Budaya
                                Asrama &amp; Disiplin</a></li>
                        <li><a class="hover:text-primary transition-colors" data-path="faq" href="#">Tanya Jawab
                                (FAQ)</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-space-sm"><span
                        class="font-label-lg text-label-lg text-on-surface">Hubungi Kami</span>
                    <div class="flex flex-col gap-space-xs font-body-sm text-body-sm text-on-surface-variant">
                        <p class="flex items-start gap-space-xs"><span
                                class="material-symbols-outlined text-base mt-0.5 text-primary">location_on</span><span>Jl.
                                Pesantren Modern No. 01, Kawasan Edukasi Terpadu, Jawa Barat</span></p>
                        <p class="flex items-center gap-space-xs"><span
                                class="material-symbols-outlined text-base text-primary">call</span><span>(021)
                                8765-4321 / 0812-3456-7890</span></p>
                        <p class="flex items-center gap-space-xs"><span
                                class="material-symbols-outlined text-base text-primary">mail</span><span>ppdb@smkbinainsan.sch.id</span>
                        </p>
                    </div>
                    <div class="flex items-center gap-space-xs pt-space-xs"><a aria-label="Media Sosial"
                            class="w-8 h-8 rounded-full bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors shadow-sm"
                            href="#"><span class="material-symbols-outlined text-base">public</span></a><a
                            aria-label="Kanal Video"
                            class="w-8 h-8 rounded-full bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors shadow-sm"
                            href="#"><span class="material-symbols-outlined text-base">smart_display</span></a><a
                            aria-label="Pesan Cepat"
                            class="w-8 h-8 rounded-full bg-surface-container-lowest flex items-center justify-center text-on-surface-variant hover:text-primary transition-colors shadow-sm"
                            href="#"><span class="material-symbols-outlined text-base">chat_bubble</span></a></div>
                </div>
            </div>
            <div
                class="pt-space-lg flex flex-col md:flex-row items-center justify-between gap-space-sm text-on-surface-variant font-body-sm text-body-sm">
                <p>© 2025 SMK Pondok Modern Bina Insan. Hak Cipta Dilindungi Undang-Undang.</p>
                <div class="flex items-center gap-space-md"><a class="hover:text-primary transition-colors"
                        href="#">Kebijakan Privasi</a><a class="hover:text-primary transition-colors" href="#">Tata
                        Tertib Santri</a><a class="hover:text-primary transition-colors" href="#">Peta Situs</a></div>
            </div>
        </div>
    </footer>
</body>

</html>