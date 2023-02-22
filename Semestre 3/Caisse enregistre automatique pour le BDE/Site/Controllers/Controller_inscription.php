<?php
require_once("Model/Model.php");
 
if(isset($_POST['forminscription'])) {
    $m = Model::getModel();
    $num_etud = htmlspecialchars($_POST['num_etud']);
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);
    $role = htmlspecialchars($_POST['role']);
    if(!empty($_POST['num_etud']) AND !empty($_POST['mail'])  AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) AND !empty($_POST['role'])) {
        $num_etudlength = strlen($num_etud);
        if($num_etudlength <= 11) {
             if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $reqmail = $m->validerMail();
                $reqmail->execute(array($mail));
                $mailexist = $reqmail->rowCount();
                if($mailexist == 0) {
                    if($mdp == $mdp2) {
                        $in = $m->validateMdp($num_etud, $mail, $mdp, $role);
                        $erreur = "Votre compte a bien été créé ! <a href=\"Controllers\Controller_connexion.php\">Me connecter</a>";
                     } else {
                        $erreur = "Vos mots de passes ne correspondent pas !";
                    }
                } else {
                    $erreur = "Adresse mail déjà utilisée !";
                }
                } else {
                $erreur = "Votre adresse mail n'est pas valide !";
                }
            }
        } else {
            $erreur = "Votre num_etud ne doit pas dépasser 255 caractères !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }

require_once("Views/view_inscription.php");