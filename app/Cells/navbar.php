<!-- Topbar Informasi Singkat -->
<div class="bg-primary text-white py-1 small d-none d-md-block">
    <div class="container d-flex justify-content-between">
        <div>
            <i class="bi bi-telephone me-1"></i> <?= esc($setting['phone'] ?? '-') ?>
            <span class="mx-2">|</span>
            <i class="bi bi-envelope me-1"></i> <?= esc($setting['email'] ?? '-') ?>
        </div>
        <div>
            <span class="badge bg-light text-primary fw-semibold">Jenjang <?= esc($setting['jenjang'] ?? 'SMK') ?></span>
        </div>
    </div>
</div>

<!-- Navbar Utama -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center fw-bold text-primary" href="<?= base_url('/') ?>">
            <?php if (! empty($setting['logo'])) : ?>
                <img src="<?= base_url('uploads/logo/' . esc($setting['logo'])) ?>" alt="Logo" height="40" class="me-2">
            <?php else : ?>
                <i class="bi bi-mortarboard-fill fs-3 me-2"></i>
            <?php endif; ?>
            <span><?= esc($setting['school_name']) ?></span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php foreach ($menus as $menu) : ?>
                    <?php if (! empty($menu['children'])) : ?>
                        <!-- Menu dengan Submenu (Dropdown) -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-medium" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?= esc($menu['title']) ?>
                            </a>
                            <ul class="dropdown-menu border-0 shadow-sm">
                                <?php foreach ($menu['children'] as $child) : ?>
                                    <li>
                                        <a class="dropdown-item"
                                            href="<?= strpos($child['url'], 'http') === 0 ? esc($child['url']) : base_url($child['url']) ?>"
                                            target="<?= esc($child['target']) ?>">
                                            <?= esc($child['title']) ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php else : ?>
                        <!-- Menu Tunggal -->
                        <li class="nav-item">
                            <a class="nav-link fw-medium"
                                href="<?= strpos($menu['url'], 'http') === 0 ? esc($menu['url']) : base_url($menu['url']) ?>"
                                target="<?= esc($menu['target']) ?>">
                                <?= esc($menu['title']) ?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>