<?php

require_once('conexao.php');

$nome = $_POST['fname'];
$email = $_POST['myemail'];
$telefone = $_POST['cellphone'];
$nascimento = $_POST['birthday'];
$senha = $_POST['password'];

$sql_cd_produto = "(select max(cd_produto)+1 from tb_produto)";

$sql = "INSERT INTO tb_produto VALUES ($sql_cd_produto,'$nome', '$nascimento','$telefone','$email','$senha')";
$insertion = pg_query($conn,$sql);


if(!$insertion){
	echo "Dados inválidos";
}

?>