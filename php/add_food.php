<?php
include '../php/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form
    $name = $_POST['name'];
    $gia = $_POST['gia'];
    $mota = $_POST['mota'];
    $trangthai = $_POST['trangthai'];
    $foodUrl = $_POST['foodUrl'];

    // Kiểm tra kết nối cơ sở dữ liệu
    if (!$conn) {
        echo json_encode(['success' => false, 'message' => 'Kết nối cơ sở dữ liệu thất bại']);
        exit;
    }

    // Chuẩn bị câu truy vấn
    $query = "INSERT INTO monan (TenMon, Gia, MoTa, TrangThai, Anh) VALUES (?, ?, ?, ?, ?)";

    // Chuẩn bị câu lệnh
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        echo json_encode(['success' => false, 'message' => 'Chuẩn bị câu truy vấn thất bại']);
        exit;
    }

    // Gắn tham số vào câu lệnh
    $stmt->bind_param("sdsss", $name, $gia, $mota, $trangthai, $foodUrl);

    // Thực thi câu lệnh
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Thêm dữ liệu thành công!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Thêm dữ liệu thất bại: ' . $stmt->error]);
    }

    // Đóng câu lệnh và kết nối
    $stmt->close();
    $conn->close();
}
?>