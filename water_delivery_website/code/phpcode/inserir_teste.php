<?php


// função de insert - ajustar para tabela destino
function db_insert_teste($fname, $birthday, $cellphone ,$myemail, $password ) {
	global $conn;
	$sql = "INSERT INTO tb_pessoa VALUES ((select max(cd_pessoa)+1),'$fname', '$birthday','$cellphone','$myemail','$password')";
    //$conn->query($sql);
	echo($sql);
	//return $conn->insert_id;
	return null;
}

require_once("./banco.php");

// verificação da chegada de dados
var_dump($_REQUEST);

// atribuição dos campos para variáveis
$fname = $_REQUEST['fname'];
$myemail = $_REQUEST['myemail'];
$cellphone = $_REQUEST['cellphone'];
$birthday = $_REQUEST['birthday'];
$password = $_REQUEST['password'];


// chamada da função
db_insert_teste($fname, $birthday, $cellphone, $myemail, $password);

?>