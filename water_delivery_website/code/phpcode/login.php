<?php

require_once('conexao.php');

$email_user = $_POST['myemail'];
$user_password = $_POST['password'];

$sql = "select sh_senha, em_email from tb_pessoa where em_email ilike '$email_user' and sh_senha = '$user_password'";
$insertion = pg_query($conn,$sql);

if(!$registro = pg_fetch_array($insertion)){
    echo ""    
}
pg_close($conn);
?>