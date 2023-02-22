<?php

require_once("../Model/Model.php");
    $m = Model::getModel();
    $stock = $m->getArticle();
    $tresorie = $m->affiche_tresorie();
    /*$tresorie = $m->affiche_tresorie();
    $data = ["stock" => $stock, "tresorie" => $tresorie];*/

  if (isset($_POST['inventaire'])) {
    if (isset($_POST["nomProduitFR"]) && isset($_POST['nomProduitEN']) && isset($_POST['quantite']) && isset($_POST['prix']) && isset($_POST['categorie'])&& isset($_POST['image'])) 
    {
      $file_name = $m->addproduct();
    } 
}
if (!isset($_SESSION['admin'])) {
  //s'il nexiste pas une session on créer une et on mets un tableau a l'intérieur 
  $_SESSION['admin'] = array();
}

//ajoute 1 a la quantite 
if(isset($_GET['plus'])){
  $id = $_GET['id'] ;
  $quantite = $_GET['plus'];
  $quantite +=1 ;
  $updateQuantite = $m->updateQuantite($quantite, $id);
}
//bouton moins
if(isset($_GET['moins'])){
  $id = $_GET['id'] ;
  $quantite = $_GET['moins'];
  $quantite -=1 ;
  $updateQuantite = $m->updateQuantite($quantite, $id);
}
//supprimer un article
if(isset($_GET['del'])){
  $id = $_GET['del'] ;
  $deletarticle = $m->deletarticle($id);
}
//ajout des sortie

if(isset($_POST['sortieargent'])){
  if (!empty($_POST['sortie'])){
    $addsortie = $m->addSortie();
  }
}

//cree compte admin 
if(isset($_POST['formadmin'])) {
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
                      $erreur = "Le compte a bien été créé !";
                   } else {
                      $erreur = "Vos mots de passes ne correspondent pas !";
                  }
              } else {
                  $erreur = "Adresse mail déjà utilisée !";
              }
              }
          }
      } 
  }
  include("../Views/view_admin.php");
        