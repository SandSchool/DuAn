<?php
require_once __DIR__ . '/../../Core/database.php';
class OrderModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }
    public function insertOrder($order_date, $user_id, $total_amount)
    {
        $sql = "INSERT INTO orders (order_date, user_id, total_amount,status) VALUES (?, ?, ?,'Đặt Hàng')"; // 'Đặt Hàng' là trạng thái mặc định khi tạo đơn hàng
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$order_date, $user_id, $total_amount]);
        return $this->db->lastInsertId();
    }
    public function updateOrderTotal($orderId, $totalAmount)
    {
        $sql = "UPDATE orders SET total_amount = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$totalAmount, $orderId]);
    }
    public function insertOrderItem($orderId, $productId, $quantity, $price)
    {
        $sql = "INSERT INTO order_items (order_id, product_id, quantity, price)
                VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$orderId, $productId, $quantity, $price]);
    }

    public function getOrdersByUserId($userId)
    {
        $sql = "SELECT * FROM orders WHERE user_id = ? ORDER BY order_date DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // người dùng có thể có nhiều đơn hàng
    }
    public function getAllOrdersWithUser()
    {
        $sql = "SELECT orders.*, users.fullname 
                FROM orders 
                LEFT JOIN users ON orders.user_id = users.id 
                ORDER BY orders.order_date DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateStatus($orderId, $newStatus)
    {
        $sql = "UPDATE orders SET status = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$newStatus, $orderId]);
    }

    public function getOrderCountPerDay($days = 7)
    {
        $stmt = $this->db->prepare("
            SELECT DATE(order_date) as order_day, COUNT(*) as order_count
            FROM orders
            WHERE order_date >= DATE_SUB(CURDATE(), INTERVAL :days DAY)
            GROUP BY order_day
            ORDER BY order_day ASC
        ");
        $stmt->bindValue(':days', $days, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
