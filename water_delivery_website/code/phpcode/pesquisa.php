<?php

include_once("conexao.php");

$pesquisa = $_POST['codigo_pessoa'];

/*
 <section>
    <div class="center"> 
         <form action="../phpcode/pesquisa.php" method="post" name="formulario">
            <label for="codigo_pessoa"><h1>Selecione sua cidade:</h1></label>
            <select name="codigo_pessoa" id="codigo_pessoa">
                <option value="2">2</option>
                <option value="1">1</option>
                <option value="3">3</option>
            </select>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </div><!-- fecha center-->
    </section>
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
<?php

    $sql = "select * from tb_pessoa where cd_pessoa = $pesquisa" ;
    $insertion = pg_query($conn,$sql);

    while($registro = pg_fetch_array($insertion)){
        $codigo = $registro['cd_pessoa'];
        $nome = $registro['nm_pessoa'];
        $email = $registro['em_email'];
        echo "<tr>";
        echo "<td>" . $codigo . "</td>";
        echo "<td>" . $nome . "</td>";
        echo "<td>" . $email . "</td>";
        echo "</tr>";
    }
    pg_close($conn);
    echo "</table>";
?>
</body>
</html>



