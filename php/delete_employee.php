<?php
// Kết nối đến CSDL
include '../php/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    if ($id) {
        // Chuẩn bị câu lệnh xóa dữ liệu
        $stmt = $conn->prepare("DELETE FROM nhanvien WHERE ID = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Không thể xóa dữ liệu.']);
        }

        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'ID không hợp lệ.']);
    }

    $conn->close();
}
?>