<?php
// Thiết lập thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shopmanager1";

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
    CONCAT('#', LPAD(DH.ID, 5, '0')) AS MaDonHang,
    DATE_FORMAT(HD.NgayThanhToan, '%d/%m/%Y %H:%i:%s') AS NgayThanhToan,
    DH.GhiChu AS DiaChi,
    FORMAT(SUM(MADD.SoLuong * MA.Gia), 0) AS TongGia,
    DH.LoaiHinh,
    HD.TrangThai AS TrangThaiHoaDon,
    GROUP_CONCAT(MA.TenMon, ' x', MADD.SoLuong SEPARATOR '<br>') AS ThongTinMonAn,
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
            "NgayThanhToan" => $row["NgayThanhToan"],
            "DiaChi" => $row["DiaChi"],
            "TongGia" => $row["TongGia"],
            "LoaiHinh" => $row["LoaiHinh"],
            "TrangThaiHoaDon" => $row["TrangThaiHoaDon"],
            "ThongTinMonAn" => $row["ThongTinMonAn"],
            "PhuongThucThanhToan" => $row["PhuongThucThanhToan"],
            "MaKhachHang" => $row["MaKhachHang"],
            "TenKhachHang" => $row["TenKhachHang"],
        ];
    }
}

// Đóng kết nối
$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Hóa Đơn</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    th,
    td {
        padding: 8px;
        text-align: center;
    }

    .break-line {
        text-align: left;
    }
    </style>
</head>

<body>

    <h1>Danh Sách Hóa Đơn</h1>

    <table>
        <thead>
            <tr>
                <th>Mã Hóa Đơn</th>
                <th>Mã Đơn Hàng</th>
                <th>Ngày Thanh Toán</th>
                <th>Địa Chỉ</th>
                <th>Thông Tin Món Ăn</th>
                <th>Tổng Giá</th>
                <th>Loại Hình</th>
                <th>Trạng Thái Hóa Đơn</th>
                <th>Phương Thức Thanh Toán</th>
                <th>Mã Khách Hàng</th>
                <th>Tên Khách Hàng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Hiển thị dữ liệu từ mảng $hoaDonArray
            foreach ($hoaDonArray as $hoaDon) {
                echo "<tr>
                        <td>{$hoaDon['MaHoaDon']}</td>
                        <td>{$hoaDon['MaDonHang']}</td>
                        <td>{$hoaDon['NgayThanhToan']}</td>
                        <td>{$hoaDon['DiaChi']}</td>
                        <td class='break-line'>{$hoaDon['ThongTinMonAn']}</td>
                        <td>{$hoaDon['TongGia']} đ</td>
                        <td>{$hoaDon['LoaiHinh']}</td>
                        <td>{$hoaDon['TrangThaiHoaDon']}</td>
                        <td>{$hoaDon['PhuongThucThanhToan']}</td>
                        <td>{$hoaDon['MaKhachHang']}</td>
                        <td>{$hoaDon['TenKhachHang']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>