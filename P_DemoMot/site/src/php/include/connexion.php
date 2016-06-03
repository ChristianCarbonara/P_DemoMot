<?php

// Auteur : Christian Carbonara
// Date : 11.05.2016
// Résumé : Essaie de se connecter

include_once("dBUse.php");

// Inclut et instancie la classe
$config = new dBUse();

// Vérifie si le nom d'utilisateur a été entré
// Si non, retourne sur la page de connexion
if (isset($_POST["nameUser"])){
    if ($_POST["nameUser"] != "") {

        // Récupère les informations pour la connexion
        $user = $config->authentification($_POST["nameUser"]);

        // Vérifie les informations de l'utilisateur pour le connecter
        // Si les informations sont incorrects, renvoie sur la page de connexion
        if (($_POST["nameUser"] == $user['useName']) && ($_POST["passwordUser"] == $user['usePassword'])) {
            session_start();
            $_SESSION['status'] = "on";
            header("Location: ../index.php");
        }
        else {
            header("Location: ../login.php");
        }
    }
    else {
        header("Location: ../login.php");
    }
}
else {
    header("Location: ../login.php");
}
?> <!-- Fin php -->

<!-- Redirige vers la page d'index -->