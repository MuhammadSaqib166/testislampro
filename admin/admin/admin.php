<?php
if(!isset($_SESSION)){
    session_start();
}
include('../db_conn.php');

// Admin Login Verificaion Code
if(!isset($_SESSION['is_admin_login'])){
    if(isset($_POST['checkLogemail']) && isset($_POST['adminLogEmail']) && isset($_POST['adminLogPass'])){
        $adminLogEmail = $_POST['adminLogEmail'];
        $adminLogPass = $_POST['adminLogPass'];

    $sql = "SELECT email, password FROM admin WHERE email = '".$adminLogEmail."' AND password='".$adminLogPass."'";
    if($result = $conn->query($sql)){
        echo "ok";
    }else{
        echo "no";
    }

    $row = $result->num_rows;
    if($row === 1){
        $_SESSION['is_admin_login'] = true;
        $_SESSION['adminLogEmail'] = $adminLogEmail;
        echo $row;
    }else if($row === 0){
        echo $row;
    }
    }
}
?>