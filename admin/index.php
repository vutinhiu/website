<?php 
    session_start();
    define('SECURITY', true);
    include_once('config/connect.php');
    if(isset($_SESSION['mail2']) && isset($_SESSION['pass2'])){
        include_once('admin.php');
    }
    else{
        include_once('login.php');
    }
?>