<?php
include '../php/db_connect.php';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["error" => $conn->connect_error]);
    exit();
}

$sql ="SELECT * 
        FROM monan
        ORDER BY  SoLuongBan DESC
        LIMIT 10";
$stmt = $conn->prepare($sql);
$stmt -> execute();
$result = $stmt ->get_result();

$foods=[];
if ($result ->num_rows>0){
    while ($row = $result->fetch_assoc()) {
        $foods[] = $row;
    }
}
echo json_encode($foods);
?>