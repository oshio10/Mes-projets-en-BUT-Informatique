<?php

require_once("../Model/Model.php");
        $m = Model::getModel();
        $req = $m->getArticle();
        //verifier si une session existe
        if (!isset($_SESSION)) {
            //si non demarer la session
            session_start();
        }
        //creer la session
        if (!isset($_SESSION['panier'])) {
            //s'il nexiste pas une session on créer une et on mets un tableau a l'intérieur 
            $_SESSION['panier'] = array();
            
        }
        //récupération de l'id dans le lien
        if (isset($_GET['id'])) { //si un id a été envoyé alors :
            $id = $_GET['id'];
            $add = $m->addToPanier($id);

        }
    
        if ($_SESSION['role']=="client"){
            include("../Views/view_catalogue_client.php");
        }
        else{
            include("../Views/view_catalogue.php");
        }
    
     

