<?php $css = "../Content/css/catalogue.css";
$anglais = "#";
$compte = "../Controllers/Controller_client.php";
require_once("../Includes/header.php");
 ?>

            <section class="products_list">
                <?php 
                //inclure la page de connexion
                //afficher la liste des produits
                foreach($req as $reqs): 
                ?>
                <form action="" class="product">
                    <div class="image_product">
                        <img src="../Content/img/<?=$reqs['img']?>">
                    </div>
                    <div class="content">
                        <h4 class="name"><?=$reqs['nomProduitFR']?></h4>
                        <h2 class="price"><?=$reqs['prix']?>€</h2>
                    </div>
                </form>
                <?php endforeach ; ?>
            
            </section>
    <?php require_once("../Includes/footer.php")?>
</body>
</html>