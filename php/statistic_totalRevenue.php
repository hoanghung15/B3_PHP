<?php
include '../php/db_connect.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["error" => $conn->connect_error]);
    exit();
}

$sql = "
    SELECT 
        MONTH(NgayTao) AS Thang,
        SUM(ma.Gia * mad.SoLuong) AS TongDoanhThu
    FROM 
        DonHang dh
    JOIN 
        MonAnDuocDat mad ON dh.id_monanduocdat = mad.ID
    JOIN 
        MonAn ma ON mad.id_monan = ma.ID
    WHERE 
        YEAR(NgayTao) = YEAR(CURRENT_DATE())
    GROUP BY 
        MONTH(NgayTao)
    ORDER BY 
        Thang
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