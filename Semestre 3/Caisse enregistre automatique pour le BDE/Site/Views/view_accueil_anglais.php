<?php
$css = "../Content/css/accueill.css";
$anglais = "view_accueil.php";
$compte = '#';
require_once("../Includes/header.php") ?>
       <div id="acceuil">
        <div class="presentation">
        <h1>Who are we?</h1>
        <p>The BDE is the student office. It is made up of students who are motivated to bring good humor, fun and activity to the campus. This student club brings happiness and joy to the university life of their comrades, by organizing parties, outings and other events of all kinds.</p>
        </div>
        <div class="hours">
        <table>
            <thead>
                <tr>
                    <th class="days"></th>
                    <th class="days">MONDAY</th><th class="days">TUESDAY</th>
                    <th class="days">WEDNESDAY</th><th class="days">THURSDAY</th>
                    <th class="days">FRIDAY</th><th class="days">SATURDAY</th>
                </tr>
            </thead>
            <tbody>
                <tr class="morning">
                    <td>MORNING</td><td>11h-13H</td><td>11h-13h</td><td>11h-13h</td>
                    <td>11h-13h</td><td>11h-13h</td><td>11h-13h</td>
                </tr>
                <tr class="afternoon">
                    <td>AFTERNOON</td><td>13h-19h</td><td>13h-19h</td><td>13h-19h</td>
                    <td>13h-19h</td><td>13h-19h</td><td>13h-19h</td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="information">
            <div class="eat">
                <img src="../Content/img/eat.png" alt="logo eat" class="eat"/>
                <h2>Food</h2>
                <h6>We offer inexpensive products to students. Snacks, drinks, water, syrup, soda and many more.</h6>
            </div>
            <div class="evenement">
                <img src="../Content/img/evenement.png" alt="logo event" class="event"/>
                <h2>Event</h2>
                <h6>We organize small events where everyone is welcome. We do fifa tournaments, chess tournaments, parties, board games and many more.</h6>
            </div>
            <div class="help">
                <img src="../Content/img/help.png" alt="logo help" class="help"/>
                <h2>Help</h2>
                <h6>We also help students with their projects. If you have a project in mind and you don't know where to start, don't hesitate to come and see us.</h6>
            </div>
        </div>
    </div>   
    <?php require_once("../Includes/footer.php") ?>
    </body>
</html>