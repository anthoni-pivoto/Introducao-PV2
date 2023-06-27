<?php

$bd_host = "200.19.1.18";// http://200.19.1.18/pgadmin4/browser/ -- http://192.168.20.18/pgadmin4
$bd_port = 5432;
$base_de_dados = "anthonimigliavasca";
$bd_usuario = "anthonimigliavasca";
$bd_senha = "123456";

$conn = pg_connect("host=$bd_host port=$bd_port dbname=$base_de_dados user=$bd_usuario password=$bd_senha") or die("Não foi possivel se conectar");
?>
