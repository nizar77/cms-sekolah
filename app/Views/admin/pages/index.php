<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>

<div class="space-y-6">
    <!-- Header & Tombol Tambah -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h2 class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">Halaman Statis</h2>
            <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5">Kelola halaman profil, visi-misi, sejarah, atau halaman informasi sekolah.</p>
        </div>
        <a href="<?= base_url('admin/pages/create') ?>"
            class="inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-xs rounded-xl shadow-xs transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
            </svg>
            <span>Tambah Halaman</span>
        </a>
    </div>

    <!-- Flash Messages -->

    

    <!-- Tabel Data -->
    <div class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-xs overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-slate-50 dark:bg-slate-800/50 text-slate-600 dark:text-slate-400 font-semibold border-b border-slate-200 dark:border-slate-800 text-xs uppercase tracking-wider">
                    <tr>
                        <th class="py-3 px-4 w-12 text-center">#</th>
                        <th class="py-3 px-4">Judul Halaman</th>
                        <th class="py-3 px-4">Slug URL</th>
                        <th class="py-3 px-4">Terakhir Diperbarui</th>
                        <th class="py-3 px-4 text-center w-28">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                    <?php if (empty($pages)) : ?>
                        <tr>
                            <td colspan="5" class="text-center py-12 text-slate-500 dark:text-slate-400 text-xs">
                                Belum ada halaman statis yang dibuat.
                            </td>
                        </tr>
                    <?php else : ?>
                        <?php foreach ($pages as $index => $page) : ?>
                            <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-800/30 transition">
                                <td class="py-3 px-4 text-center font-medium text-slate-500 text-xs"><?= $index + 1 ?></td>
                                <td class="py-3 px-4 font-semibold text-slate-900 dark:text-white"><?= esc($page['title']) ?></td>
                                <td class="py-3 px-4 text-xs font-mono text-indigo-600 dark:text-indigo-400">/halaman/<?= esc($page['slug']) ?></td>
                                <td class="py-3 px-4 text-xs text-slate-500"><?= date('d M Y, H:i', strtotime($page['updated_at'])) ?></td>
                                <td class="py-3 px-4 text-center">
                                    <div class="flex items-center justify-center gap-1.5">
                                        <a href="<?= base_url('admin/pages/edit/' . $page['id']) ?>" class="p-1.5 text-slate-500 hover:text-indigo-600 dark:hover:text-indigo-400 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800 transition" title="Edit">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        <a href="<?= base_url('admin/pages/delete/' . $page['id']) ?>" onclick="return confirm('Hapus halaman ini?')" class="p-1.5 text-slate-500 hover:text-rose-600 dark:hover:text-rose-400 rounded-lg hover:bg-rose-50 dark:hover:bg-rose-950/50 transition" title="Hapus">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>