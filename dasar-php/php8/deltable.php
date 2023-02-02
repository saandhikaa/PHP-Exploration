<?php 
    session_start();
    
    if (!isset($_SESSION["login"])){
        header("Location: login.php");
    }
    
    require 'functions.php';
    
    $id = $_GET["id"];

    if(hapus($id) > 0){
        header("Location: index.php");
    }
?>