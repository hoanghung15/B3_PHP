<?php
include '../php/db_connect.php'; // Kết nối đến cơ sở dữ liệu

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ request
    $name = $_POST['Ten'];
    $date = $_POST['NgayVao'];
    $email = $_POST['Email'];
    $phone = $_POST['SoDienThoai'];
    $avtUrl = $_POST['avtUrl'];

    // Chuẩn bị câu lệnh INSERT
    $stmt = $conn->prepare("INSERT INTO nhanvien (Ten, NgayVao, Email, SoDienThoai, avtUrl) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $date, $email, $phone, $avtUrl);

    // Thực thi câu lệnh và kiểm tra kết quả
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => $stmt->error]);
    }

    // Đóng kết nối
    $stmt->close();
    $conn->close();
}
?>