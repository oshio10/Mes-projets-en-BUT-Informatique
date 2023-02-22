<?php
$css = "../Content/css/accueill.css";
$anglais = "view_accueil_anglais.php";
$compte = '#';
require_once("../Includes/header.php") ?>
        
       <div id="acceuil">
        <div class="presentation">
        <h1>Qui sommes nous?</h1>
        <p>Le BDE est le bureau des étudiants. Il est composé d'étudiants motivés pour apporter de la bonne humeur, du fun et de l'activté sur le campus. Ce club d'étudiants apporte un peux de bonheur et de joie dans la vie universitaire de leurs camarades, en organisant des soirées, des sorties et autres évenements de tout genre.</p>
        </div>
        <div class="horraire">
        <table>
            <thead>
                <tr>
                    <th class="jour"></th>
                    <th class="jour">LUNDI</th><th class="jour">MARDI</th>
                    <th class="jour">MERCREDI</th><th class="jour">JEUDI</th>
                    <th class="jour">VENDREDI</th><th class="jour">SAMEDI</th>
                </tr>
            </thead>
            <tbody>
                <tr class="matin">
                    <td>MATIN</td><td>10h-12h30</td><td>13h-16h</td><td>13h-16h</td>
                    <td>13h-16h</td><td>13h-16h</td><td>13h-16h</td>
                </tr>
                <tr class="aprem">
                    <td>APREM</td><td>10h-12h30</td><td>13h-16h</td><td>13h-16h</td>
                    <td>13h-16h</td><td>13h-16h</td><td>13h-16h</td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="information">
            <div class="eat">
                <img src="../Content/img/eat.png" class="eat">
                <h2>Nourriture</h2>
                <h6>Nous proposons des produits pas cher aux etudiants. Des snacks, boissons, eau, sirop, soda et pleins d'autres.</h6>
            </div>
            <div class="evenement">
                <img src="../Content/img/evenement.png" class="evenement">
                <h2>Evènement</h2>
                <h6>Nous organisons des petits évènement où tous le monde est le bienvenue. Nous faisons des tournois de fifa, des tournois d'échecs, des soirées, des jeux de société et plein d'autres.</h6>
            </div>
            <div class="eat">
                <img src="../Content/img/help.png" class="help">
                <h2>Aide</h2>
                <h6>Nous aidons également les étudiants pour leurs projets. Si tu as un projet en tête et que tu ne sais pas par où commencer n'hésite pas à venir nous voir.</h6>
            </div>
        </div>
        <?php require_once("../Includes/footer.php") ?>
    </div>   
    </body>
</html>