<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: ../Controllers/Controller_connexion.php");
?>