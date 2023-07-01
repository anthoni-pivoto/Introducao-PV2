<div class="menu">
    <?php
        echo "<a href=\"./index_homepage.php\" id=\"inicio\">Home</a>";
        echo "<a href=\"./index_products.php\" id=\"products\">Products</a>";
        echo "<a href=\"./index_about.php\" id=\"about\">About us</a>";
        if(!isset($_SESSION['id'])){
        echo "<a href=\"./index_account.php\" id=\"account\" >Account</a>";
        }
        else{
            echo "<a href=\"./logged.php\" id=\"account\" >" . $_SESSION['nome'] . "</a>";
        }
        echo "<a href=\"./index_offers.php\" id=\"offers\">Limited Offers!</a>";
?> 

</div>