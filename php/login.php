<?php
    include '../php/db_connect.php';

    function login(){
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $email=$_POST['email'];
            $password = $_POST['password'];

            global $conn;
            $sql ="select * from user where email = ?";
            $stmt = $conn->prepare($sql);
            $stmt ->bind_param("s",$email);
            $stmt -> execute();
            $result = $stmt ->get_result();
            if($result -> num_rows >0){
                $user = $result -> fetch_assoc();
                if(password_verify($password,$user['password'])){
                    if($user['role']=='admin'){
                        header("Location: ../HTML/home.php");
                        exit();
                    }
                    else{
                        echo "<script>alert('Bạn không có quyền truy cập vào trang này.');</script>";
                    }
                }
                else {
                    echo "<script>alert('Mật khẩu không chính xác.');</script>";
                }  
            }else {
                echo "<script>alert('Email không tồn tại.');</script>";
            }
            
            $stmt->close();
        
        }
    }
    login();
?>