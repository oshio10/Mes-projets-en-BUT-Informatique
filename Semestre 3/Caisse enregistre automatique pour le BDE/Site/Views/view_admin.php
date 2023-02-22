<?php $css = "../Content/css/compte.css";
$anglais = "#";
$compte = "#";
require_once("../Includes/header.php");
 ?>

    <div class="client">
        <div id="tabs">
            <button class="tablink" onclick="openTab('Inventaire')">Inventaire</button>
            <button class="tablink" onclick="openTab('Trésorerie')">Trésorerie</button>
            <button class="tablink" onclick="openTab('paiement')">Paiement</button>
        </div>
        <!-- INVENTAIRE -->
        <div id="Inventaire" class="tabcontent">
            <div class="ajouter-form">
                <h1>Ajouter un produit</h1>
                <form method="POST" action="">
                    <div class="data-container">
                        <div class="data">
                            <label for="nomProduitFR">Nom de l'article FR</label>
                            <input name="nomProduitFR" type="text" />
                        </div>
                        <div class="data">

                            <label for="nomProduitEN">Nom de l'article EN</label>
                            <input name="nomProduitEN" type="text" />
                        </div>
                        <div class="data">
                            <label for="prix">Prix</label>
                            <input name="prix" type="number" />
                        </div>
                        <div class="data">
                            <label for="quantite">quantite</label>
                            <input name="quantite" type="number" />
                        </div>
                        <div class="data">
                            <label for="categorie">Categorie</label>
                            <select name="categorie">
                                <option>boisson</option>
                                <option>snacks</option>
                                <option>sodas</option>
                                <option>eau+sirop</option>
                            </select>
                        </div>
                        <div class="data">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image">
                        </div>
                    </div>
                    <button type="submit" name="inventaire"> Ajouter </button>
                </form>
            </div>
            <!---affice inventaire--->
            <table><thead><tr><th>Image</th><th>Articles</th> <th>Quantité</th><th>Action</th></tr></thead>
                <tbody> <?php foreach ($stock as $ligne) : ?> <tr>
                <td> <img src="../Content/img/<?= $ligne["img"] ?>" alt="no-image" /></td>
                <td><?= $ligne['nomProduitFR'] ?></td>
                <td>
                   <a href="../Controllers/Controller_admin.php?moins=<?=$ligne['quantite']?>&amp;id=<?=$ligne['id']?>">-</a>
                   <?= $ligne['quantite']?>
                   <a href="../Controllers/Controller_admin.php?plus=<?=$ligne['quantite']?>&amp;id=<?=$ligne['id']?>">+</a>
                </td>
                <td>
                <a href="../Controllers/Controller_admin.php?del=<?=$ligne['id']?>">SUPRIMER</a>
                </td>
                </tr><?php endforeach; ?></tbody></table>
        </div>

        <!-- TRESORERIE -->
        <div id="Trésorerie" class="tabcontent">
            <table><tbody><tr><td>
                <h3>Trésorerie</h3></br>
                <form class="form" action="" method="POST">
                <label>
                    <span>Sortie: </span>&emsp; <input type="number" name="sortie" />&emsp;
                </label>
                    <input class="bouton" type="submit" name="sortieargent" value="Entrer" />
                </form>
                <table><thead><tr><th>Entrées</th><th>Sorties</th></tr></thead>
                        <tbody><?php
                        $tresorerie = $m->affiche_tresorie();
                        foreach ($tresorie as $ligne) : ?>
                        <tr><td><?= $ligne["entrees"] ?></td>
                        <td><?= $ligne["sortie"] ?></td>
                        </tr><?php endforeach; ?></tbody>
                </table>
                
            </td></tr></tbody></table>
        </div>

        <!-- PAIEMENT -->
        <div id="paiement" class="tabcontent">
            <div class="infopayement">
            <form method="POST" action="">
               <label>
                  <span>Numero étudiant</span>
                  <input type="text" placeholder="Votre num_etud" id="num_etud" name="num_etud" value="<?php if(isset($num_etud)) { echo $num_etud; } ?>" />
               </label>
               <label>
                  <span>Mail</span>
                  <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
               </label>
               <label>
                  <span>Mot de passe :</span>
                  <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
               </label>
               <label>
                  <span>Confirmation du mot de passe :</span>
                  <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
               </label>
               <label>
                   <select name="role">
                   <option name="role">admin</option>
                   </select>
               </label>
               <br />
                     <input class="submit" type="submit" name="formadmin" value="Je m'inscris" />
            </form>
            </div>
        </div>
    </div>
    <?php require_once("../Includes/footer.php")?>
</body>
</html>