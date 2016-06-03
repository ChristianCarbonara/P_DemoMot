<?php

// Auteur :
// Date :
// Résumé :

/**
 * Created by PhpStorm.
 * User: carbonarch
 * Date: 11.05.2016
 * Time: 12:05
 */

include_once("dBUse.php");

// Inclut et instancie la classe
$config = new dBUse();

// Ajoute l'enseignant
$config->addThisUser($_POST["userNameCreate"],$_POST["passwordUserCreate"]);

?> <!-- Fin php -->
<!-- Redirige vers la page d'index -->
<meta HTTP-EQUIV="Refresh" content="0;URL=../index.php">