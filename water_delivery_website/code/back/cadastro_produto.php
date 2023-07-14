<?php

require_once('conexao.php');

$description = $_POST['description'];
$price = $_POST['price'];

$sql_cd_produto = "(select max(cd_produto)+1 from tb_produto)";

$sql = "INSERT INTO tb_produto VALUES ($sql_cd_produto,'$description', $price)";
$insertion = pg_query($conn,$sql);

if(!$insertion){
	echo "Dados inválidos";
}
else{
	header("Location: ../front/index_products.php");
}

?>