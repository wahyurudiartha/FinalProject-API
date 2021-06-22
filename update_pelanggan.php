<?php

include 'connection.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];

$sql = "UPDATE pelanggan set 
        
        nama='$nama', 
        nohp='$nohp', 
        alamat='$alamat' WHERE id='$id'";
       
$result = $connect->query($sql);

if($result){
    echo json_encode(array(
        "succes" => true,
      
    ));
}else{
    echo json_encode(array(
        "succes" => false,
   
    ));
}