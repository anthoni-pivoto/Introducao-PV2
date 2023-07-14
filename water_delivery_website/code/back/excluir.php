<?php

require_once('conexao.php');

$id = $_GET['id'];

$sql = "select * from tb_produto where cd_produto='$id'";
$insertion = pg_query($conn,$sql);

if($rows = pg_num_rows($insertion) == 1){
    $sql = "delete from tb_produto where cd_produto='$id'";
    $insertion = pg_query($conn,$sql);
}
else{
    echo "ERRO MALUKO";
}
header('Location: ../front/index_products.php');
?>