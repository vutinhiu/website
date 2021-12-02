<?php 
    if(!defined('SECURITY')){
        die('Bạn không có quyền truy cập file này !');
    }
    $conn = mysqli_connect('localhost','root','','btlcnpm');
    if($conn){
        mysqli_query($conn, "SET NAMEs 'UTF8'");
    }else{
        echo "Kết nối Database thất bại";
    }
?>