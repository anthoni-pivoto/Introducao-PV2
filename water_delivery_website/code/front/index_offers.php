<?php
include('../back/protect.php');
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
        <div class="produto">
            <img src="../imgs/prod_1.jpg" alt="Produto 1">
            <div class="preco">From <s>R$32,00</s> to R$21,00 </div>
            <div class="descricao">20L gallon w/ hull</div>
        </div>
        <div class="produto">
            <img src="../imgs/prod_2.jpg" alt="Produto 2">
            <div class="preco">From <s>R$40,00</s> to R$28,00 </div>
            <div class="descricao">Electric water pump for 20L gallon</div>
        </div>
        <div class="produto">
            <img src="../imgs/prod_3.jpg" alt="Produto 3">
            <div class="preco">From <s>R$60,00</s> to R$45,00 </div>
            <div class="descricao">Support for 20L gallon</div>
        </div><br><br>
        <h1>If you want to order those offer or other products, talk with us on our <a href="https://wa.me/5551985059805">Whatsapp</a></h1>
    </div>
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