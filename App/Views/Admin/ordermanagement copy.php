<?php include __DIR__ . '/../layout/header.php'; ?>
<?php include __DIR__ . '/../layout/sliderbar.php'; ?>

<h2 class="mb-4">Quản lý đơn hàng (Admin)</h2>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Khách hàng</th>
                    <th>Ngày đặt</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                <tr>
                    <td><?= $order['id'] ?></td>
                    <td><?= htmlspecialchars($order['fullname']) ?></td>
                    <td><?= $order['order_date'] ?></td>
                    <td><?= number_format($order['total_amount'], 0) ?> đ</td>
                    <td><?= ucwords(strtolower($order['status'])) ?></td>
                    <td>
                        <form method="post" action="<?= $baseURL ?>order/updateStatus" class="d-flex gap-1">
                            <input type="hidden" name="order_id" value="<?= $order['id'] ?>">
                            <select name="status" class="form-select form-select-sm">
                                <?php foreach (['Đặt hàng', 'Đang xử lý', 'Đã giao hàng', 'Đã hủy'] as $st): ?>
                                    <option value="<?= $st ?>" <?= strtolower($order['status']) == strtolower($st) ? 'selected' : '' ?>>
                                        <?= $st ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <button class="btn btn-sm btn-primary mt-1">Cập nhật</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
