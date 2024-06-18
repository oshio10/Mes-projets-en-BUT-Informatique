<?php $css ="../Content/css/catalogue.css";
$anglais = "#";
$compte = "../Controllers/Controller_admin.php";
 require_once("../Includes/header.php");
 ?>

    <a href="../Controllers/Controller_catalogue.php" class="link">Boutique</a>
    <section>
        <table>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
                <th>Pris</th>
            </tr>
            <?php 
            if (isset($products)){
                $tab = $m->client();
               foreach($products as $product):
                    //calculer le total ( prix unitaire * quantité) 
                    //et aditionner chaque résutats a chaque tour de boucle
                    $total = $total + $product['prix'] * $_SESSION['panier'][$product['id']] ;
                ?>
                <tr>
                    <td><img src="../Content/img/<?=$product['img']?>"></td>
                    <td><?= $product['nomProduitFR']?></td>
                    <td><?=$product['prix']?>€</td>
                    <td><?=$_SESSION['panier'][$product['id']] // Quantité?></td>
                    <td><a href="../Controllers/Controller_panier.php?del=<?=$product['id']?>"><img class="delet" src="../Content/img/delete.png"></a></td>
                    <td><a href="../Controllers/Controller_panier.php?nomProduitFR=<?=$product['nomProduitFR']?>&amp;del=<?=$product['id']?>">Valider l'article</a></td>
                </tr>

            <?php endforeach ;} ?>
            <tr class="total">
                </form>
                <th>Total :<?=$total?>€ 
                <form method="POST" action="">
                    <input type="number" name="monnaie">
                    <input type="submit" class="submit" name="monnaiearendre" value="entrer!" />
                </from>
                <?php if(isset($_POST['monnaiearendre'])){
                if(isset($_POST['monnaie'])){
                $monnaie = $_POST['monnaie'] - $total;
                echo $monnaie;
                } else {
                echo "le deuxieme";}
                }?>
                </th>
                <form method="POST" action="">
                    <label>Numéro Etudiant</label>
                    <input type="text" name="num_etud">
                    <input type="submit" class="submit" name="clientpanier" value="entrer!" />
                </from>

            </tr>
        </table>
    </section>
    <?php require_once("../Includes/footer.php")?>
</body>
</html>