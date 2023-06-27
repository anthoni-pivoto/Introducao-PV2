<?php
include('login.php');
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['id'])){
    die("<h1>Pagina somente disponivel para usuarios logados.</h1><p><a href=\"../front/index_account.php\">Clique aqui para entrar</a></p>");
}
?>