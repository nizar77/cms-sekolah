<?= $this->extend('layout/admin') ?>

<?= $this->section('styles') ?>
<style>
    .nested-sortable {
        min-height: 14px;
        list-style: none;
    }
    .nested-sortable .nested-sortable {
        padding-left: 1.5rem;
        margin-top: 0.5rem;
        border-left: 2px dashed #cbd5e1;
    }
    .dark .nested-sortable .nested-sortable {
        border-left-color: #334155;
    }
    .sortable-ghost {
        opacity: 0.4;
        background-color: #e0e7ff !important;
    }
    .dark .sortable-ghost {
        background-color: #1e1b4b !important;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div x-data="menuManager()">
    <!-- Notifikasi Flashdata (Dari Submit Form Tambah/Hapus) -->
    <?php if (session()->getFlashdata('success')) : ?>
        <div x-data="{ show: true }" x-show="show" class="mb-6 flex items-center justify-between p-4 rounded-xl bg-emerald-50 dark:bg-emerald-950/50 border border-emerald-200 dark:border-emerald-800 text-emerald-800 dark:text-emerald-300 text-sm">
            <span><?= esc(session()->getFlashdata('success')) ?></span>
            <button @click="show = false" class="text-emerald-600 hover:text-emerald-800 font-bold text-lg leading-none">&times;</button>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
        <div x-data="{ show: true }" x-show="show" class="mb-6 flex items-center justify-between p-4 rounded-xl bg-rose-50 dark:bg-rose-950/50 border border-rose-200 dark:border-rose-800 text-rose-800 dark:text-rose-300 text-sm">
            <span><?= esc(session()->getFlashdata('error')) ?></span>
            <button @click="show = false" class="text-rose-600 hover:text-rose-800 font-bold text-lg leading-none">&times;</button>
        </div>
    <?php endif; ?>

    <!-- Notifikasi AJAX Reaktif Alpine.js (Saat Simpan Urutan Drag & Drop) -->
    <div x-show="toastMessage" 
         x-cloak
         x-transition
         :class="toastError ? 'bg-rose-50 dark:bg-rose-950/50 border-rose-200 dark:border-rose-800 text-rose-800 dark:text-rose-300' : 'bg-emerald-50 dark:bg-emerald-950/50 border-emerald-200 dark:border-emerald-800 text-emerald-800 dark:text-emerald-300'"
         class="mb-6 flex items-center justify-between p-4 rounded-xl border text-sm">
        <span x-text="toastMessage"></span>
        <button @click="toastMessage = ''" class="font-bold text-lg leading-none">&times;</button>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        <!-- Kolom Kiri (4 Kolom): Form Tambah Menu -->
        <div class="lg:col-span-4">
            <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 p-6 shadow-xs">
                <h2 class="text-base font-semibold mb-4 pb-3 border-b border-slate-100 dark:border-slate-800">
                    Tambah Item Menu
                </h2>

                <form action="<?= base_url('admin/menus/store') ?>" method="post" class="space-y-4">
                    <?= csrf_field() ?>

                    <div>
                        <label class="block text-xs font-semibold mb-1.5 text-slate-600 dark:text-slate-300">
                            Label Menu <span class="text-rose-500">*</span>
                        </label>
                        <input type="text" name="title" required
                               placeholder="Contoh: Profil Sekolah"
                               class="w-full px-3.5 py-2 text-sm rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold mb-1.5 text-slate-600 dark:text-slate-300">
                            URL / Tautan <span class="text-rose-500">*</span>
                        </label>
                        <input type="text" name="url" required
                               placeholder="Contoh: /halaman/visi-misi"
                               class="w-full px-3.5 py-2 text-sm rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <p class="mt-1.5 text-[11px] text-slate-500 dark:text-slate-400">
                            Gunakan tanda <code class="px-1 py-0.5 rounded bg-slate-100 dark:bg-slate-800 font-mono">#</code> jika hanya sebagai induk dropdown.
                        </p>
                    </div>

                    <div>
                        <label class="block text-xs font-semibold mb-1.5 text-slate-600 dark:text-slate-300">
                            Target Buka Link
                        </label>
                        <select name="target" 
                                class="w-full px-3.5 py-2 text-sm rounded-lg border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option value="_self">Tab Saat Ini (_self)</option>
                            <option value="_blank">Tab Baru (_blank)</option>
                        </select>
                    </div>

                    <button type="submit" 
                            class="w-full py-2.5 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-sm rounded-xl shadow-sm transition flex items-center justify-center gap-2 cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                        </svg>
                        <span>Tambahkan ke Menu</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Kolom Kanan (8 Kolom): Area Susun Drag & Drop -->
        <div class="lg:col-span-8">
            <div class="bg-white dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800 p-6 shadow-xs">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-4 pb-3 border-b border-slate-100 dark:border-slate-800">
                    <div>
                        <h2 class="text-base font-semibold">Struktur Menu Navigasi</h2>
                        <p class="text-xs text-slate-500 dark:text-slate-400">Tarik item ke atas/bawah untuk mengurutkan, atau geser menjorok ke kanan untuk membuat submenu.</p>
                    </div>

                    <button @click="saveOrder()" 
                            :disabled="saving"
                            class="shrink-0 inline-flex items-center justify-center gap-2 px-4 py-2 bg-emerald-600 hover:bg-emerald-700 disabled:opacity-50 text-white text-xs font-semibold rounded-xl shadow-xs transition cursor-pointer">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span x-text="saving ? 'Menyimpan...' : 'Simpan Susunan'"></span>
                    </button>
                </div>

                <?php
                // Fungsi rekursif untuk merender list menu bersarang dengan class Tailwind
                function renderTailwindMenuList(array $items)
                {
                    foreach ($items as $item) {
                        echo '<li class="menu-item mb-2" data-id="' . esc($item['id']) . '">';
                        echo '  <div class="flex items-center justify-between p-3 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 hover:border-indigo-400 dark:hover:border-indigo-600 transition">';
                        echo '      <div class="flex items-center gap-3 min-w-0">';
                        echo '          <span class="drag-handle cursor-grab active:cursor-grabbing text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 p-1" title="Tarik untuk memindahkan">';
                        echo '              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16"/></svg>';
                        echo '          </span>';
                        echo '          <div class="truncate">';
                        echo '              <span class="text-sm font-semibold text-slate-800 dark:text-slate-100">' . esc($item['title']) . '</span>';
                        echo '              <span class="ml-2 text-xs text-slate-500 dark:text-slate-400 font-mono">' . esc($item['url']) . '</span>';
                        if ($item['target'] === '_blank') {
                            echo '          <span class="ml-1.5 px-1.5 py-0.5 text-[10px] rounded bg-slate-200 dark:bg-slate-800 text-slate-600 dark:text-slate-300">Tab Baru</span>';
                        }
                        echo '          </div>';
                        echo '      </div>';
                        echo '      <a href="' . base_url('admin/menus/delete/' . $item['id']) . '" onclick="return confirm(\'Hapus menu ini beserta submenunya?\')" class="p-1.5 text-slate-400 hover:text-rose-600 dark:hover:text-rose-400 rounded-lg hover:bg-rose-50 dark:hover:bg-rose-950/50 transition" title="Hapus Menu">';
                        echo '          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>';
                        echo '      </a>';
                        echo '  </div>';
                        echo '  <ul class="nested-sortable">';
                        if (! empty($item['children'])) {
                            renderTailwindMenuList($item['children']);
                        }
                        echo '  </ul>';
                        echo '</li>';
                    }
                }
                ?>

                <ul id="menu-root" class="nested-sortable">
                    <?php if (empty($menuTree)) : ?>
                        <div class="text-center py-10 px-4 border-2 border-dashed border-slate-200 dark:border-slate-800 rounded-xl">
                            <p class="text-sm text-slate-500 dark:text-slate-400">Belum ada item menu.</p>
                            <p class="text-xs text-slate-400 dark:text-slate-500 mt-1">Silakan tambahkan menu baru melalui formulir di samping.</p>
                        </div>
                    <?php else : ?>
                        <?php renderTailwindMenuList($menuTree); ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>
<script>
    function menuManager() {
        return {
            csrfHash: '<?= csrf_hash() ?>',
            saving: false,
            toastMessage: '',
            toastError: false,

            init() {
                // Inisialisasi SortableJS pada seluruh wadah list bersarang
                document.querySelectorAll('.nested-sortable').forEach((el) => {
                    new Sortable(el, {
                        group: 'nested-menu',
                        handle: '.drag-handle',
                        animation: 150,
                        fallbackOnBody: true,
                        swapThreshold: 0.65
                    });
                });
            },

            serializeTree(ulElement) {
                let items = [];
                ulElement.querySelectorAll(':scope > li.menu-item').forEach((li) => {
                    let childUl = li.querySelector(':scope > ul.nested-sortable');
                    items.push({
                        id: li.getAttribute('data-id'),
                        children: childUl ? this.serializeTree(childUl) : []
                    });
                });
                return items;
            },

            async saveOrder() {
                const rootEl = document.getElementById('menu-root');
                const treeData = this.serializeTree(rootEl);

                if (treeData.length === 0) return;

                this.saving = true;
                this.toastMessage = '';

                try {
                    const response = await fetch('<?= base_url('admin/menus/save-order') ?>', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': this.csrfHash
                        },
                        body: JSON.stringify({ tree: treeData })
                    });

                    const data = await response.json();
                    if (data.csrf) this.csrfHash = data.csrf;

                    this.toastError = !response.ok;
                    this.toastMessage = data.message || 'Struktur menu berhasil diperbarui!';
                } catch (error) {
                    this.toastError = true;
                    this.toastMessage = 'Terjadi kesalahan jaringan saat menyimpan susunan menu.';
                } finally {
                    this.saving = false;
                    setTimeout(() => { this.toastMessage = ''; }, 3500);
                }
            }
        }
    }
</script>
<?= $this->endSection() ?>