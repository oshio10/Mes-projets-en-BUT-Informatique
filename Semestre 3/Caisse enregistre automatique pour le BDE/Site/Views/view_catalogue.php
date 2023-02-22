<?php $css = "../Content/css/catalogue.css";
$anglais = "#";
$compte = "../Controllers/Controller_admin.php";
require_once("../Includes/header.php");
 ?>

        <a href="../Controllers/Controller_panier.php" class="link">Panier<span><?=array_sum($_SESSION['panier'])?></span></a>
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
                        <h4 class="name"><?= $reqs['nomProduitFR'];?></h4>
                        <h2 class="price"><?=$reqs['prix']?>€</h2>
                        <a href="Controller_catalogue.php?id=<?=$reqs['id']?>" class="id_product">Ajouter au panier</a>
                    </div>
                </form>
                <?php endforeach ; ?>
            
            </section>
    <?php require_once("../Includes/footer.php")?>
</body>
</html>