<?php

// Auteur : Christian Carbonara
// Date : 11.05.2016
// Résumé : Déconnexion de la session

session_start();

session_unset();

session_destroy();

header("Location: ../index.php");
?>