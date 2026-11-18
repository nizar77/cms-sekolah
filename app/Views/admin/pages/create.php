<?= $this->extend('layout/admin') ?>

<?= $this->section('styles') ?>
<!-- Quill CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
<style>
    .ql-toolbar.ql-snow {
        border-top-left-radius: 0.75rem;
        border-top-right-radius: 0.75rem;
        border-color: #cbd5e1 !important;
        background-color: #f8fafc;
    }

    .ql-container.ql-snow {
        border-bottom-left-radius: 0.75rem;
        border-bottom-right-radius: 0.75rem;
        border-color: #cbd5e1 !important;
        min-height: 280px;
        font-family: inherit;
        font-size: 0.95rem;
    }

    .dark .ql-toolbar.ql-snow {
        border-color: #334155 !important;
        background-color: #020617;
    }

    .dark .ql-container.ql-snow {
        border-color: #334155 !important;
        background-color: #090d16;
        color: #f8fafc;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="max-w-4xl mx-auto space-y-6" x-data="pageForm()">
    <div class="flex items-center justify-between">
        <h2 class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">Tambah Halaman Statis</h2>
        <a href="<?= base_url('admin/pages') ?>" class="text-xs text-slate-500 hover:text-indigo-600 dark:hover:text-indigo-400 font-semibold">&larr; Kembali</a>
    </div>

    <?php if (session()->getFlashdata('errors')) : ?>
        <div class="p-4 rounded-xl bg-rose-50 dark:bg-rose-950/50 border border-rose-200 dark:border-rose-800 text-rose-700 dark:text-rose-300 text-xs">
            <ul class="list-disc list-inside space-y-1">
                <?php foreach (session()->getFlashdata('errors') as $err) : ?>
                    <li><?= esc($err) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('admin/pages/store') ?>" method="post" @submit="prepareSubmit" class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 p-6 space-y-5 shadow-xs">
        <?= csrf_field() ?>

        <div>
            <label class="block text-xs font-semibold mb-1.5 text-slate-700 dark:text-slate-300">Judul Halaman *</label>
            <input type="text" name="title" value="<?= old('title') ?>" required placeholder="Contoh: Sejarah SMK Texmaco"
                class="w-full px-3.5 py-2.5 text-sm rounded-xl border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-950 focus:ring-2 focus:ring-indigo-500">
        </div>

        <div>
            <label class="block text-xs font-semibold mb-1.5 text-slate-700 dark:text-slate-300">Konten Halaman *</label>
            <!-- Wadah Quill Editor -->
            <div id="editor"></div>
            <!-- Hidden Input untuk dikirim ke Controller -->
            <input type="hidden" name="content" x-model="content">
        </div>

        <div class="flex justify-end gap-3 pt-4 border-t border-slate-100 dark:border-slate-800">
            <a href="<?= base_url('admin/pages') ?>" class="px-4 py-2.5 rounded-xl border border-slate-300 dark:border-slate-700 text-xs font-semibold text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition">Batal</a>
            <button type="submit" class="px-5 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-xs shadow-xs transition">Simpan Halaman</button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- Quill JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
<script>
    let quill;

    function pageForm() {
        return {
            content: '<?= old('content') ?>',
            init() {
                quill = new Quill('#editor', {
                    theme: 'snow',
                    modules: {
                        toolbar: [
                            [{
                                header: [1, 2, 3, false]
                            }],
                            ['bold', 'italic', 'underline', 'strike'],
                            [{
                                list: 'ordered'
                            }, {
                                list: 'bullet'
                            }],
                            ['link', 'blockquote', 'code-block'],
                            ['clean']
                        ]
                    }
                });
                if (this.content) {
                    quill.root.innerHTML = this.content;
                }
            },
            prepareSubmit() {
                this.content = quill.root.innerHTML;
            }
        }
    }
</script>
<?= $this->endSection() ?>