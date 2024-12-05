<?php
include '../php/db_connect.php';

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$search = isset($_GET['search']) ? $_GET['search'] : ""; 

$sql = "
SELECT 
    DH.ID AS DonHangID,
    CONCAT('#OD', LPAD(DH.ID, 3, '0')) AS MaDonHang,
    DH.LoaiHinh,
    DATE_FORMAT(DH.NgayTao, '%d/%m/%Y %H:%i:%s') AS NgayTao,
    MA.TenMon AS TenMon,
    MADD.SoLuong AS SoLuong,
    FORMAT(MA.Gia, 0) AS Gia,
    DH.GhiChu AS GhiChu,
    FORMAT(SUM(MADD.SoLuong * MA.Gia), 0) AS TongGia
FROM 
    donhang DH
JOIN 
    monanduocdat MADD ON DH.id_monanduocdat = MADD.ID
JOIN 
    monan MA ON MADD.id_monan = MA.ID
WHERE 
    CONCAT('#OD', LPAD(DH.ID, 3, '0')) LIKE ?
GROUP BY 
    DH.ID, MA.ID
ORDER BY 
    DH.NgayTao DESC
";

$stmt = $conn->prepare($sql);
$searchTerm = "%" . $search . "%";
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

// Mảng để lưu trữ kết quả
$donHangArray = [];

if ($result->num_rows > 0) {
    // Lặp qua từng hàng kết quả
    while ($row = $result->fetch_assoc()) {
        // Thêm dữ liệu vào mảng
        $donHangArray[] = [
            "DonHangID" => $row["DonHangID"],
            "MaDonHang" => $row["MaDonHang"],
            "LoaiHinh" => $row["LoaiHinh"],
            "NgayTao" => $row["NgayTao"],
            "TenMon" => $row["TenMon"],
            "SoLuong" => $row["SoLuong"],
            "Gia" => $row["Gia"],
            "GhiChu" => $row["GhiChu"],
            "TongGia" => $row["TongGia"],
        ];
    }
}
echo json_encode($donHangArray);

// Đóng kết nối
$conn->close();
?>