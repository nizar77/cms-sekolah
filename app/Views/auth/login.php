<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin — CMS Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center vh-100">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h4 class="text-center mb-1 fw-bold">CMS Sekolah</h4>
                        <p class="text-center text-muted small mb-4">Silakan masuk ke panel pengelola</p>

                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger py-2 small">
                                <?= esc(session()->getFlashdata('error')) ?>
                            </div>
                        <?php endif; ?>

                        <?php if (session()->getFlashdata('success')) : ?>
                            <div class="alert alert-success py-2 small">
                                <?= esc(session()->getFlashdata('success')) ?>
                            </div>
                        <?php endif; ?>

                        <form action="<?= base_url('login') ?>" method="post">
                            <?= csrf_field() ?>

                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Email</label>
                                <input type="email" name="email" class="form-control" value="<?= old('email') ?>" placeholder="admin@sekolah.sch.id" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-semibold">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>