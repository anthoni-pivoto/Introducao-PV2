<?php
require_once("./conexao.php");
function inserir_cadastro($nome, $nascimento, $telefone, $email,$senha){
	global $conn;
	$sql = "INSERT INTO tb_pessoa VALUES ((select max(cd_pessoa)+1),'$nome', '$nascimento','$telefone','$email','$senha')";
    $conn = pg_query($conn,$sql);
	//$conn->query($sql);
	//echo($sql);
	//return $conn->insert_id;
	return null;
}

var_dump($_REQUEST);

$nome = $_REQUEST['fname'];
$email = $_REQUEST['myemail'];
$telefone = $_REQUEST['cellphone'];
$nascimento = $_REQUEST['birthday'];
$senha = $_REQUEST['password'];

inserir_cadastro($nome, $nascimento, $telefone, $email, $senha);

?>