<?php
$config = require 'config.php';
$baseURL = $config['baseURL'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="<?= $baseURL ?>Assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= $baseURL ?>Assets/css/styles.css" rel="stylesheet" />
    <link href="<?= $baseURL ?>Assets/css/history.css" rel="stylesheet" />
</head>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h2 class="mb-4 text-center">📜 Lịch sử đơn hàng</h2>
            <?php if (empty($orders)): ?>
                <div class="alert alert-info text-center">Bạn chưa có đơn hàng nào.</div>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt</th>
                                <th>Trạng thái</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order): ?>
                                <tr>
                                    <td>#<?= $order['id'] ?></td>
                                    <td><?= date('d/m/Y H:i', strtotime($order['order_date'])) ?></td>
                                    <td><?= $order['status'] ?></td>
                                    <td><?= number_format($order['total_amount'], 0) ?> VND</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="mt-4">
                        <a href="<?= $baseURL ?>home/index" class="btn btn-primary">Quay lại trang chủ</a>
                    </div>
                <?php endif; ?>
                </div>
        </div>
    </div>