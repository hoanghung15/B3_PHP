<?php
header("Content-Type: application/json");

include '../php/db_connect.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["error" => $conn->connect_error]);
    exit();
}

// Lấy tham số từ request
$sort = isset($_GET['sort']) && $_GET['sort'] === "desc" ? "DESC" : "ASC"; // Mặc định ASC
$search = isset($_GET['search']) ? $_GET['search'] : ""; // Từ khóa tìm kiếm (nếu có)

// Truy vấn dữ liệu với tìm kiếm
$query = "SELECT ID, Ten, NgayVao, Email, SoDienThoai, TongDon, avtUrl 
          FROM NhanVien 
          WHERE Ten LIKE ? 
          ORDER BY NgayVao $sort";
$stmt = $conn->prepare($query);
$searchTerm = "%" . $search . "%";
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

$employees = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $employees[] = $row;
    }
}

echo json_encode($employees);
$conn->close();