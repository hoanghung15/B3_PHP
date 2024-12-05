<?php
include '../php/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $image = $_POST['image']; // URL từ Firebase


    $stmt = $conn->prepare("UPDATE nhanvien SET Ten = ?, NgayVao = ?, Email = ?, SoDienThoai = ?, avtUrl = ? WHERE ID = ?");
    $stmt->bind_param("sssssi", $name, $date, $email, $phone, $image, $id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => $stmt->error]);
    }

    $stmt->close();
    $conn->close();
}
?>