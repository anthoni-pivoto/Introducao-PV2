<?php

require_once('conexao.php');

$nome = $_POST['fname'];
$email = $_POST['myemail'];
$telefone = $_POST['cellphone'];
$nascimento = $_POST['birthday'];
$senha = $_POST['password'];

$sql_cd_pessoa = "(select max(cd_pessoa)+1 from tb_pessoa)";

$sql = "INSERT INTO tb_pessoa VALUES ($sql_cd_pessoa,'$nome', '$nascimento','$telefone','$email','$senha')";
$insertion = pg_query($conn,$sql);


if(!$insertion){
	echo "Dados inválidos";
}

?>
