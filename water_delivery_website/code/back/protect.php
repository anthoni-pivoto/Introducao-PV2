<?php
include('login.php');
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['id'])){
    die(header("Location: ../front/redirect.php"));
}
?>