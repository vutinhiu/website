<?php 
    session_start();
    define('SECURITY', True);
    include_once('config/connect.php');
    $cat_id = $_GET['cat_id'];
    if(isset($_SESSION['mail2']) && isset($_SESSION['pass2'])){
        $sql = "DELETE FROM category WHERE cat_id = $cat_id";
        mysqli_query($conn,$sql);
        header("location: index.php?page_layout=category");
    }
?>