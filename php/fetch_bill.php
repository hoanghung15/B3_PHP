<?php
// Thiết lập thông tin kết nối cơ sở dữ liệu
include '../php/db_connect.php';

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Câu lệnh SQL để lấy dữ liệu hóa đơn và đơn hàng liên quan
$sql = "
SELECT 
    HD.ID AS MaHoaDon,
    CONCAT('#', LPAD(DH.ID, 2, '0')) AS MaDonHang,
    DATE_FORMAT(HD.NgayThanhToan, '%d/%m/%Y') AS NgayThanhToan, -- Ngày thanh toán
    DATE_FORMAT(HD.NgayThanhToan, '%H:%i:%s') AS GioThanhToan,  -- Giờ thanh toán
    DH.GhiChu AS DiaChi,
    FORMAT(SUM(MADD.SoLuong * MA.Gia), 0) AS TongGia,
    DH.LoaiHinh,
    HD.TrangThai AS TrangThaiHoaDon,
    GROUP_CONCAT(
        MA.TenMon SEPARATOR '<br>'
    ) AS ThongTinMonAn,
    GROUP_CONCAT(
        FORMAT(MA.Gia, 0) SEPARATOR '<br>'
    ) AS GiaMonAn,  -- Cột giá món ăn
    GROUP_CONCAT(
        MA.Anh SEPARATOR '<br>'
    ) AS AnhMonAn,  -- Cột URL ảnh món ăn
    GROUP_CONCAT(
        MADD.SoLuong SEPARATOR '<br>'
    ) AS SoLuongMonAn,  -- Cột số lượng món ăn
    DH.PhuongThucThanhToan,
    DH.id_user AS MaKhachHang,
    U.name AS TenKhachHang
FROM 
    hoadon HD
JOIN 
    donhang DH ON HD.id_don_hang = DH.ID
JOIN 
    monanduocdat MADD ON DH.id_monanduocdat = MADD.ID
JOIN 
    monan MA ON MADD.id_monan = MA.ID
JOIN 
    user U ON DH.id_user = U.id
GROUP BY 
    HD.ID, DH.ID
ORDER BY 
    HD.NgayThanhToan DESC;
";

// Thực thi câu lệnh SQL
$result = $conn->query($sql);
if (!$result) {
    die("Lỗi truy vấn SQL: " . $conn->error);
}

// Mảng để lưu trữ kết quả
$hoaDonArray = [];

if ($result->num_rows > 0) {
    // Lặp qua từng hàng kết quả
    while ($row = $result->fetch_assoc()) {
        // Thêm dữ liệu vào mảng
        $hoaDonArray[] = [
            "MaHoaDon" => $row["MaHoaDon"],
            "MaDonHang" => $row["MaDonHang"],
            "Ngay" => $row["NgayThanhToan"],
            "Gio" => $row["GioThanhToan"],
            "DiaChi" => $row["DiaChi"],
            "TongGia" => $row["TongGia"],
            "LoaiHinh" => $row["LoaiHinh"],
            "TrangThaiHoaDon" => $row["TrangThaiHoaDon"],
            "ThongTinMonAn" => $row["ThongTinMonAn"],
            "GiaMonAn" => $row["GiaMonAn"],  // Thêm giá món ăn vào mảng kết quả
            "AnhMonAn" => $row["AnhMonAn"],  // Thêm URL ảnh món ăn vào mảng kết quả
            "SoLuongMonAn" => $row["SoLuongMonAn"],  // Thêm số lượng món ăn vào mảng kết quả
            "PhuongThucThanhToan" => $row["PhuongThucThanhToan"],
            "MaKhachHang" => $row["MaKhachHang"],
            "TenKhachHang" => $row["TenKhachHang"],
        ];
    }
}

// Trả kết quả JSON cho client
echo json_encode($hoaDonArray);

// Đóng kết nối
$conn->close();
?>