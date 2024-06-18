<?php $css = "../Content/css/compte.css";
$anglais = "#";
$compte = "#";
require_once("../Includes/header.php");
 ?>

        <div class="client">
            <div id="tabs">
                <button class="tablink" onclick="openTab('historique_achats')">Historique d'achats</button>
                <button class="tablink" onclick="openTab('fidelite')">Compte</button>
             </div>
            <div id="historique_achats" class="tabcontent">
                <table>
                    <thead>
                     <tr><th> Article </th><th> Quantité </th><th> Date </th></tr>
                     </thead>
                    <tbody>
                        <?php  
                        foreach($produit as $ligne):?>
                        <tr><td><?= $ligne["nomProduitFR"]?></td><td><?= $ligne["quantite"]?></td><td><?= $ligne["date"]?></td></tr>
                            <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <div id="fidelite" class="tabcontent"> 
                <div class="fid">
                    <img class="user" src="../Content/img/user.png"></br>
                    <?php $oui = $_SESSION['num_etud']?>
                    <label>Numéro Etudiant: <?= $_SESSION['num_etud']; ?></label></br>
                    <label>Mail: <?= $_SESSION['mail']; ?></label></br>
                    <label>Points Fidélité:</label></br>
                </div>
            </div>
        </div>
    <?php require_once("../Includes/footer.php")?>
    </body>
</html>
