<?php

require "connect.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $response = array();
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $cek = "SELECT * FROM user WHERE username='$username' and password='$password'";
    $result = mysqli_fetch_array(mysqli_query($conn, $cek));

    if(isset($result)){
        $response['value'] = 1;
        $response['message'] = 'Login Berhasil';
        echo json_encode($response);

    } else{
            $response['value'] = 0;
            $response['message'] = "login gagal";
            echo json_encode($response);
        }
    }

?>