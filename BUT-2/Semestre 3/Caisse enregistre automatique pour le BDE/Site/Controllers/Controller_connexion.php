<?php
session_start();
require_once("../Model/Model.php");
 
if(isset($_POST['formconnexion'])) {
    $m = Model::getModel();
    $tab = $m->client();
    $num_etudconnect = htmlspecialchars($_POST['num_etud']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($num_etudconnect) AND !empty($mdpconnect)) {
        $requser = $m->verifConnexion($num_etudconnect, $mdpconnect);
        $userexist = $requser->rowCount();
        if($userexist == 1 ) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['num_etud'] = $userinfo['num_etud'];
            $_SESSION['mail'] = $userinfo['mail'];
            $_SESSION['role'] = $userinfo['role'];
            header("Location: ../Controllers/Controller_catalogue.php?id=".$_SESSION['id']);
        }else{
                echo "Mauvais numéro etudiant ou mot de passe !";
            }
        } else{
                echo "Tous les champs doivent être complétés !";
    }        
}
require_once("../Views/view_connexion.php");

