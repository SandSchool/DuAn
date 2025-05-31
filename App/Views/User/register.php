<?php
$config = require 'config.php';
$baseURL = $config['baseURL'];
?>

<?php
// App/Views/User/register.php
// Giao diện đăng ký (giống login.php)

include __DIR__ . '/../Layout/homeHeader.php';
?>

<div class="container mt-5 mb-5">
    <div class=" container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card p-4 shadow-sm">
                    <div class="card-body">
                        <h2 class="text-center mb-4">📝 Đăng ký tài khoản</h2>

                        <?php if (!empty($error)): ?>
                            <div class="alert alert-danger"><?= $error ?></div>
                        <?php endif; ?>

                        <form action="<?= $baseURL ?>user/register" method="POST">
                            <div class="mb-3">
                                <label>Họ tên</label>
                                <input type="text" name="fullname" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label>Tên đăng nhập</label>
                                <input type="text" name="username" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label>Mật khẩu</label>
                                <input type="password" name="password" class="form-control" required />
                            </div>
                            <button type="submit" class="btn btn-success w-100">Đăng ký</button>
                        </form>

                        <div class="text-center mt-3">
                            Đã có tài khoản? <a href="<?= $baseURL ?>user/login">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->

<?php include './App/Views/Layout/homeFooter.php'; ?>