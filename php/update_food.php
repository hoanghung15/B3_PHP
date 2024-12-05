<?php

include '../php/db_connect.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $gia = $_POST['gia'];
    $mota = $_POST['mota'];
    $trangthai = $_POST['trangthai'];
    $foodUrl = $_POST['foodUrl'];

    $sql="UPDATE monan 
            SET TenMon=?,MoTa =?,Anh =?, TrangThai=?,Gia=?
             WHERE ID=?";
    
    $stmt = $conn->prepare($sql);
    $stmt -> bind_param(("ssssdi"),$name,$mota,$foodUrl,$trangthai,$gia,$id);

    if($stmt ->execute()){
        echo json_encode(["success" => true]);
    }else {
        echo json_encode(["success" => false, "message" => $stmt->error]);
    }
    $stmt->close();
    $conn->close();
}
?>