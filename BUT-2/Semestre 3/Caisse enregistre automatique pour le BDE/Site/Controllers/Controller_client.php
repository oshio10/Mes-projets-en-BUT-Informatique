<?php 
require_once("../Model/Model.php");
    $m = Model::getModel();
    if (!isset($_SESSION)) {
        //si non demarer la session
        session_start();
    }
    //creer la session
    if (!isset($_SESSION['client'])) {
        //s'il nexiste pas une session on créer une et on mets un tableau a l'intérieur 
        $_SESSION['client'] = array();
        
    }
    $numetud = htmlspecialchars($_SESSION['num_etud']);
    $produit = $m->historiqueClient($numetud);
    require_once("../Views/view_client.php");
?>
