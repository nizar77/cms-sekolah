<?= $this->extend('layout/admin') ?>

<?= $this->section('content') ?>

<!-- Alert Sukses dengan Tombol Tutup Alpine.js -->
<?php if (session()->getFlashdata('success')) : ?>
    <div x-data="{ show: true }" x-show="show" class="mb-6 flex items-center justify-between p-4 rounded-xl bg-emerald-50 dark:bg-emerald-950/50 border border-emerald-200 dark:border-emerald-800 text-emerald-800 dark:text-emerald-300 text-sm">
        <span><?= esc(session()->getFlashdata('success')) ?></span>
        <button @click="show = false" class="text-emerald-600 hover:text-emerald-800 font-bold">&times;</button>
    </div>
<?php endif; ?>

<form action="<?= base_url('admin/settings/update') ?>" method="post" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <?= csrf_field() ?>

    <!-- Kolom Kiri (2/3 Lebar di Desktop) -->
    <div class="lg:col-span-2 space-y-6">
        <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 p-6 shadow-xs">
            <h2 class="text-base font-semibold mb-4 pb-3 border-b border-slate-100 dark:border-slate-800">Identitas & Kontak Sekolah</h2>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="sm:col-span-2">
                    <label class="block text-xs font-semibold mb-1.5 text-slate-600 dark:text-slate-300">Nama Sekolah *</label>
                    <input type="text" name="school_name" value="<?= esc(old('school_name', $setting['school_name'] ?? '')) ?>" required
                        class="w-full px-3.5 py-2 text-sm rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div>
                    <label class="block text-xs font-semibold mb-1.5 text-slate-600 dark:text-slate-300">Jenjang *</label>
                    <?php $jenjang = old('jenjang', $setting['jenjang'] ?? 'SMK'); ?>
                    <select name="jenjang" class="w-full px-3.5 py-2 text-sm rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="SMP" <?= $jenjang === 'SMP' ? 'selected' : '' ?>>SMP / MTs</option>
                        <option value="SMK" <?= $jenjang === 'SMK' ? 'selected' : '' ?>>SMK / MAK</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-semibold mb-1.5 text-slate-600 dark:text-slate-300">NPSN</label>
                    <input type="text" name="npsn" value="<?= esc(old('npsn', $setting['npsn'] ?? '')) ?>"
                        class="w-full px-3.5 py-2 text-sm rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div>
                    <label class="block text-xs font-semibold mb-1.5 text-slate-600 dark:text-slate-300">Telepon</label>
                    <input type="text" name="phone" value="<?= esc(old('phone', $setting['phone'] ?? '')) ?>"
                        class="w-full px-3.5 py-2 text-sm rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div>
                    <label class="block text-xs font-semibold mb-1.5 text-slate-600 dark:text-slate-300">Email Resmi</label>
                    <input type="email" name="email" value="<?= esc(old('email', $setting['email'] ?? '')) ?>"
                        class="w-full px-3.5 py-2 text-sm rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="sm:col-span-3">
                    <label class="block text-xs font-semibold mb-1.5 text-slate-600 dark:text-slate-300">Alamat Lengkap</label>
                    <textarea name="address" rows="2" class="w-full px-3.5 py-2 text-sm rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 focus:outline-none focus:ring-2 focus:ring-indigo-500"><?= esc(old('address', $setting['address'] ?? '')) ?></textarea>
                </div>
            </div>
        </div>
    </div>

    <!-- Kolom Kanan: Upload Logo dengan Live Preview Alpine.js -->
    <div class="space-y-6"
        x-data="{ 
             previewUrl: '<?= ! empty($setting['logo']) ? base_url('uploads/logo/' . esc($setting['logo'])) : 'https://placehold.co/150x150?text=Logo+Sekolah' ?>',
             updatePreview(event) {
                 const file = event.target.files[0];
                 if (file) {
                     this.previewUrl = URL.createObjectURL(file);
                 }
             }
         }">
        <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 p-6 shadow-xs text-center">
            <h2 class="text-base font-semibold mb-4 pb-3 border-b border-slate-100 dark:border-slate-800 text-left">Logo Sekolah</h2>

            <div class="w-40 h-40 mx-auto mb-4 rounded-xl border-2 border-dashed border-slate-300 dark:border-slate-700 flex items-center justify-center p-3 bg-slate-50 dark:bg-slate-950">
                <img :src="previewUrl" alt="Preview Logo" class="max-h-32 object-contain">
            </div>

            <input type="file" name="logo" @change="updatePreview" accept="image/png, image/jpeg, image/webp"
                class="block w-full text-xs text-slate-500 file:mr-3 file:py-2 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100 dark:file:bg-indigo-950 dark:file:text-indigo-300">
        </div>

        <button type="submit" class="w-full py-2.5 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-sm rounded-xl shadow-sm transition cursor-pointer">
            Simpan Pengaturan
        </button>
    </div>
</form>

<?= $this->endSection() ?>