<?php
$config = require 'config.php';
$baseURL = $config['baseURL'];
?>

<?php include './App/Views/Layout/homeHeader.php'; ?>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card p-4 shadow-sm">
                <h2 class="text-center mb-4">🔐 Đăng nhập</h2>
                <?php if (!empty($error)): ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php endif; ?>
                <form action="<?= $baseURL ?>user/login" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Tên đăng nhập</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mật khẩu</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
                    <p class="text-center mt-3">Chưa có tài khoản?
                        <a href="<?= $baseURL ?>user/register">Đăng ký ngay</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include './App/Views/Layout/homeFooter.php'; ?>