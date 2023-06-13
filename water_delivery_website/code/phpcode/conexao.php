<?php

$bd_host = "200.19.1.18";
$bd_port = 5432;
$base_de_dados = "anthonimigliavasca";
$bd_usuario = "anthonimigliavasca";
$bd_senha = "123456";

$conn = pg_connect("host=$bd_host port=$bd_port dbname=$base_de_dados " .
								"user=$bd_usuario password=$bd_senha");
if(!$conn) {
	die("Não foi possível se conectar ao banco de dados.");
}
?>
