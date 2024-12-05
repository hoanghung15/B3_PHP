<?php
header("Content-Type: application/json");
include '../php/db_connect.php';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo json_encode(["error" => $conn->connect_error]);
    exit();
}

$sort = isset($_GET['sort']) && $_GET['sort'] === "desc" ? "DESC" : "ASC";
$search = isset($_GET['search']) ? $_GET['search'] : "";
// Ensure the query selects all columns from the `monan` table.

$query = "SELECT * FROM monan
        WHERE TenMon LIKE ?
        ORDER BY Gia $sort";

$stmt = $conn->prepare($query);
$searchTerm = "%" . $search . "%";
$stmt->bind_param("s", $searchTerm);

$stmt->execute();
$result = $stmt->get_result();

$food = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $food[] = $row;
    }
}

echo json_encode($food);
$stmt->close();
$conn->close();
?>