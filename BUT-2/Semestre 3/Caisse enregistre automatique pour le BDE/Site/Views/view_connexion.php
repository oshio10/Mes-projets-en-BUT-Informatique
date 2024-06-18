<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8" />
      <link rel="stylesheet" href="../Content/css/singn.css">
      <title>Connexion</title>
   </head>
   <body>
      <div class="cont">
         <div class="form_sign-in">
            <form method="POST" action="">
            <h2><img src="../Content/img/oo.png" class="logo">Connexion</h2>
            <label>
               <span>Numero étudiant</span>
               <input type="num_etud" name="num_etud" placeholder="num_etud" />
            </label>
            <label>
               <span>Password</span>
               <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            </label>   
               <input type="submit" class="submit" name="formconnexion" value="Se connecter !" />
            </form>
            <?php
            if(isset($erreur)) {
               echo '<font color="red">'.$erreur."</font>";
            }
            ?>
         </div>
         <div class="element2">
                <div class="img">
                    <div class="img__text">
                        <h2>Vous êtes Nouveau?</h2>
                        <p>Inscrivez-vous et faites vos achats plus rapidement !</p>
                    </div>
                    <div class="img__btn">
                        <span class="singup"><a href="../index.php">Inscription</a></span>
                    </div>
                </div>
            </div>
      </div>
   </body>
</html>
