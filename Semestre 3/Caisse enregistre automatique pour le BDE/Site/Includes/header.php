<html>
    <head>
        <title>tout</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Content/css/includes.css">
        <link rel="stylesheet" href= <?= $css ?> >
        <script src="../Content/js/admin.js"> </script>
        
   </head>
    <body>
    <header>
    <nav id="header" class="navbar">
        <div class="logo">
            <h3><img src="../Content/img/logo.png" class="logo"></h3>
        </div>
        
            <label for="toggle" class="pages">☰</label>
            <input type="checkbox" id="toggle">  
    
        <div class="main_pages">
            <a href=<?= $compte ?>>Compte</a>
            <a href="../Views/view_accueil.php">Accueil</a>
            <a href="../Controllers/Controller_catalogue.php">Catalogue</a>
            <a href="../Views/view_deconexion.php">Deconnexion</a>
        </div>

        <a href=<?= $anglais?>><img src="../Content/img/anglais.png" class="anglais"></a>
  </nav>
</header>