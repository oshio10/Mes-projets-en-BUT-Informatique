<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8" />
      <link rel="stylesheet" href="Content/css/singn.css">
      <title>Inscription</title>
   </head>
   <body>
      <div id="singin" class="cont">
         <div class="form sign-in">
         <form method="POST" action="">
            <h2><img src="Content/img/oo.png" class="logo">Inscription</h2>
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
                    <option name="role">client</option>
</select>
               </label>
               <br />
                     <input class="submit" type="submit" name="forminscription" value="Je m'inscris" />
            </form>
         <div class="element2">
            <div class="img">
               <div class="img__text">
                  <h2>Avez-vous déjà un compte?</h2>
                  <p>Connectez vous et accéder à votre compte!<img src="Content/img/anglais.png" class="en"></p>
               </div>
               <div class="img__btn"><br />
                  <span class="singup"><a href="Controllers/Controller_connexion.php">Connexion</a></span>
            </div>
         </div>
         </div>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>

      </div>
   </body>
</html>