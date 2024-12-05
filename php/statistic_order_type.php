<?php
include '../php/db_connect.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["error" => $conn->connect_error]);
    exit();
}

$sql = "
    SELECT 
        LoaiHinh, 
        COUNT(*) AS SoLuong
    FROM 
        DonHang
    GROUP BY 
        LoaiHinh
";

$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);
?>