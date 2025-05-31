<?php
$config = require "config.php";   // Tải mảng cấu hình từ file config.php
$baseURL = $config['baseURL'];    // Lấy giá trị 'baseURL' từ mảng cấu hình
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LoMing - Tiệm Giày Top 1</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= $baseURL ?>Assets/css/styles.css" rel="stylesheet" />
    <!-- Custom js for slideshow -->

    <!-- Custom CSS for slideshow -->
    <link href="<?= $baseURL ?>Assets/css/slideshow.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand fw-bold" href="<?= $baseURL ?>home/index" style="font-size: 1.8rem;">
                <img src="<?= $baseURL ?>Assets/Images/logo/logo.png" alt="LOMING" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= $baseURL . 'home/index' ?>">Shop it</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $baseURL . 'user/contact' ?>">Liên hệ</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= $baseURL . 'user/about' ?>">Giới thiệu</a></li>
                </ul>
                </li>
                </ul>
                <!-- Dời phần Profile ra ngoài ul này -->
                <div class="d-flex align-items-center">
                    <?php
                    if (isset($_SESSION['user_id'])) {
                    ?>
                        <div class="nav-item dropdown me-3">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownProfile" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person fs-4"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownProfile">
                                <li><a class="dropdown-item" href="#!"><?= $_SESSION['username'] ?></a></li>
                                <li><a class="dropdown-item" href="<?= $baseURL ?>order/history">Lịch sử đơn hàng</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href="<?= $baseURL ?>user/logout">Logout</a></li>
                            </ul>
                        </div>
                    <?php
                    } else {
                    ?>
                        <a class="btn btn-outline-primary me-3" href="<?= $baseURL ?>user/login">Login</a>
                    <?php
                    }
                    ?>

                    <!-- Form giỏ hàng Cart -->
                    <form action="<?= $baseURL . 'cart/index' ?>" method="POST" class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">
                                <?= array_sum(array_column($_SESSION['cart'] ?? [], 'quantity')) ?>
                            </span>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </nav>

    <!-- Header Slideshow -->
    <header class="slideshow-container">
        <!-- Slide 1 -->
        <div class="slide active" style="background-image: url('<?= $baseURL ?>Assets/Images/slides/slide1.jpg');">
            <div class="slide-overlay">
                <div class="slide-content">
                    <h1 class="display-4 fw-bolder">Shop Limited Shoes</h1>
                    <p class="lead fw-normal mb-0">Ngon - Bổ - Rẻ</p>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide" style="background-image: url('<?= $baseURL ?>Assets/Images/slides/slide2.jpg');">
            <div class="slide-overlay">
                <div class="slide-content">
                    <h1 class="display-4 fw-bolder">Bộ Sưu Tập Mới</h1>
                    <p class="lead fw-normal mb-0">Khám phá xu hướng giày mới nhất</p>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide" style="background-image: url('<?= $baseURL ?>Assets/Images/slides/slide3.jpg');">
            <div class="slide-overlay">
                <div class="slide-content">
                    <h1 class="display-4 fw-bolder">Giảm Giá Đặc Biệt</h1>
                    <p class="lead fw-normal mb-0">Tiết kiệm đến 50% cho tất cả sản phẩm</p>
                </div>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="slide" style="background-image: url('<?= $baseURL ?>Assets/Images/slides/slide4.jpg');">
            <div class="slide-overlay">
                <div class="slide-content">
                    <h1 class="display-4 fw-bolder">Chất Lượng Hàng Đầu</h1>
                    <p class="lead fw-normal mb-0">Cam kết chất lượng và dịch vụ tốt nhất</p>
                </div>
            </div>
        </div>

        <!-- Slide Indicators -->
        <div class="slide-indicators">
            <div class="indicator active" data-slide="0"></div>
            <div class="indicator" data-slide="1"></div>
            <div class="indicator" data-slide="2"></div>
            <div class="indicator" data-slide="3"></div>
        </div>
    </header>
    <script src="<?= $baseURL ?>/Assets/js/slideshow.js"></script>
</body>

</html>