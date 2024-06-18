<?php
    //inclure la page de connexion
require_once("../Model/Model.php");
        //supprimer les produits
        //si la variable del existe
        $m = Model::getModel();
        if (!isset($_SESSION)) {
          //si non demarer la session
          session_start();
        }
        //creer la session
        if (!isset($_SESSION['panier'])) {
            //s'il nexiste pas une session on créer une et on mets un tableau a l'intérieur 
            $_SESSION['panier'] = array();
        }
        if (isset($_POST['clientpanier'])) {
            if (isset($_GET['nomProduitFR'])) {
                $achats = $m->addachats();
            }
        }
        if(isset($_GET['del'])){
            $id_del = $_GET['del'] ;
            //suppression
            unset($_SESSION['panier'][$id_del]);
        }
        $total = 0 ;
              // liste des produits
              //récupérer les clés du tableau session
        $ids = array_keys($_SESSION['panier']);
              //s'il n'y a aucune clé dans le tableau
        if(empty($ids)){
                echo "Votre panier est vide";
        }else {
                //si oui 
          $products = $m->getProduct($ids);
                //lise des produit avec une boucle foreach
        }

        
        include("../Views/view_panier.php");
            
?>
