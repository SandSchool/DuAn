<?php
$config = require 'config.php';
$baseURL = $config['baseURL'];
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới Thiệu Sản Phẩm Giày</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Nút trở về trang chủ */
        .home-button {
            position: absolute;
            top: 20px;
            left: 20px;
            display: flex;
            align-items: center;
            padding: 10px 16px;
            background-color: #1a73e8;
            color: white;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            text-decoration: none;
            box-shadow: 0 4px 12px rgba(26, 115, 232, 0.3);
            transition: all 0.3s ease;
            cursor: pointer;
            z-index: 10;
        }

        .home-button:hover {
            background-color: #0d62c9;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(26, 115, 232, 0.4);
        }

        .home-button:active {
            transform: translateY(0);
            box-shadow: 0 2px 8px rgba(26, 115, 232, 0.3);
        }

        .home-button svg {
            margin-right: 8px;
        }


        .product-showcase {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .product-intro {
            flex: 1;
            font-size: medium;
        }

        .intro-label {
            color: #1a73e8;
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .product-title {
            font-size: 48px;
            font-weight: 900;
            color: #222;
            margin-bottom: 30px;
            line-height: 1.1;
        }

        .features-container {
            flex: 1;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .feature-icon {
            background-color: #1a73e8;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .feature-content h3 {
            font-size: 18px;
            margin-bottom: 5px;
            color: #333;
        }

        .feature-content p {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }

        @media (max-width: 992px) {
            .product-showcase {
                flex-direction: column;
            }

            .product-title {
                font-size: 36px;
            }

            .product-image-container {
                order: -1;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="<?= $baseURL . 'home/index' ?>" class="home-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> // Đường viền cho hình ngôi nhà
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path> // Đường dẫn cho hình ngôi nhà
                <polyline points="9 22 9 12 15 12 15 22"></polyline> // Đường dẫn cho hình chữ nhật
            </svg>
            Trang Chủ
        </a>
        <div class="product-showcase">
            <div class="product-intro">
                <div class="intro-label">Lời Mở Đầu</div>
                <h1 class="product-title">Giới Thiệu Về<br>Shop Bán Giày</h1>
            </div>
            <div class="features-container">
                <div class="feature-item">
                    <div class="feature-icon">»</div>
                    <div class="feature-content">
                        <h3>Hơn Cả Một Đôi Giày</h3>
                        <p>Một đôi giày có thể đưa bạn đến nơi bạn muốn, nhưng một đôi giày đặc biệt sẽ kể câu chuyện của chính bạn.
                            Hơn cả một đôi giày, đó là bước khởi đầu cho hành trình khẳng định phong cách và cá tính riêng.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">»</div>
                    <div class="feature-content">
                        <h3>Là Một Shop Đầy Tâm Huyết</h3>
                        <p>Chúng tôi tự hào khi được bạn chọn là shop tin cậy để mua giày</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">»</div>
                    <div class="feature-content">
                        <h3>Không Bao Giờ Giống Nhau</h3>
                        <p>Những đôi giày mới luôn được cập nhật, đồng thời cập nhật cả nhân viên mới</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>