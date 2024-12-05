<?php
include '../php/db_connect.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["error" => $conn->connect_error]);
    exit();
}

$sql ="SELECT * 
        FROM nhanvien
        ORDER BY  TongDon DESC
        LIMIT 10";
$stmt = $conn->prepare($sql);
$stmt -> execute();
$result = $stmt ->get_result();

$employees=[];
if ($result ->num_rows>0){
    while ($row = $result->fetch_assoc()) {
        $employees[] = $row;
    }
}
echo json_encode($employees);
?>