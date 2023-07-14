<?php
include('../back/login.php');
if(!isset($_SESSION)){
    session_start();
}
$sql = "select * from tb_produto order by vl_produto";
$insertion = pg_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="py-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale-1.0>">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style2.css"><!--head padrao linkado ao css-->
</head>
<body>
    <header>
        <div class="full">
            <div class="logo"><a href="./index_homepage.php"><img src="../imgs/logo.png" id="logo"></a></div><!-- adicionando imagem-->
            <?php require_once('./navbar.php');?>
        </div><!--fecha center-->
    </header>
    <hr width="90%" size="3px" color="white">
    <br><br><br><br>
    <section>
    <div class="center"> 
        <table border="1" cellspacing="0" width="70%" height="">
            <tr>
                <th>Products</th>
                <th>price</th>
                <?php if(@$_SESSION['id'] == 1){
                    echo "<th>Delete</th>";
                }?>
            </tr>
            <?php
            if(@$_SESSION['id'] == 1){
                while($array_prod = pg_fetch_array($insertion)){
                    echo "<tr>
                    <td>". $array_prod['nm_produto'] ."</td>
                    <td class=\"price\">R$". $array_prod['vl_produto'] .",00</td>
                    <td><a href=\"../back/excluir.php?id=".$array_prod['cd_produto']."\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash3-fill\" viewBox=\"0 0 16 16\">
                    <path d=\"M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z\"/>
                    </svg></a></td></tr>";
            }}
            else{
                while($array_prod = pg_fetch_array($insertion)){
                echo "<tr>
                <td>". $array_prod['nm_produto'] ."</td>
                <td class=\"price\">R$". $array_prod['vl_produto'] .",00</td>
                </tr>";
            }}
            ?>
        </table>
        <?php
        if(@$_SESSION['id'] == 1){
            echo "<form method=\"post\" action=\"../back/cadastro_produto.php\" class=\"form_product\">
            <fieldset class=\"fldset\">
                <legend>Add product:</legend>
                <label for=\"description\" >Description:</label>
                <textarea name=\"description\" id=\"description\" cols=\"1\" rows=\"5\" required>20L gallon of coke...</textarea>
                <label for=\"price\">Price:</label>
                <input type=\"number\" name=\"price\" id=\"price\" required><br>
                <input type=\"submit\" value=\"Add\">
            </fieldset>
        </form>";
        }
        ?>
    </div><!-- fecha center-->
    </section>
    <footer>
        <div class="footer_content">
            <div class="footer_contacts">
                <h1>Want some water?</h1>
                <div class="footer_social_media">
                    <a href="#" class="footer_link" id="intagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="footer_link" id="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="footer_link" id="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
                </div><!--fecha footer_social_media-->
            </div><!--fecha footer_contacts-->
            <ul class="footer_list">
                <li>
                    <h3>Our team</h3>
                </li>
                <li>
                    <a href="#" class="footer_link">Anthoni Pivoto</a>
                </li>
                <li>
                    <a href="#" class="footer_link">Aline Pivoto</a>
                </li>
                <li>
                    <a href="#" class="footer_link">Daniel Vieira</a>
                </li>
            </ul>
            <ul class="footer_list">
                <li>
                    <h3>Who made this website</h3>
                </li>
                <li>
                    <a href="#" class="footer_link">Anthoni Pivoto</a>
                </li>
                <li>
                    <a href="#" class="footer_link">Ingridy Farias</a>
                </li>
            </ul>
        </div><!--fecha footer_content-->
        <div class="footer_copyr">
            &#169
            2023 All rights reserved
        </div>
    </footer>
</body>
</html>