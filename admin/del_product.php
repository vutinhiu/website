<?php 
    session_start();
    define('SECURITY', True);
    include_once('config/connect.php');
    $prd_id = $_GET['prd_id'];
    if(isset($_SESSION['mail2']) && isset($_SESSION['pass2'])){
        $sql = "DELETE FROM product WHERE prd_id = $prd_id";
        mysqli_query($conn,$sql);
        header("location: index.php?page_layout=product");
    }
?>