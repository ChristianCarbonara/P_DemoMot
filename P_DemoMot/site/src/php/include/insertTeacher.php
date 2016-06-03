<?php

// Auteur : Christian Carbonara
// Date : 04.05.2016
// Résumé : Ajout un enseignant

include_once("dBUse.php");

// Inclut et instancie la classe
$config = new dBUse();

// Définie la destination de l'image pour l'enregistrer
$newPathFile = "../../../resources/images/";

// Vérifie si une image a été définie
// Si vrai, il définie un nouveau nom et l'enregistre
// Si faux, il utilise une image prédéfinie
if ($_FILES['photo']['name'] != "") {

    // Recherche de l'extension du nom de fichier pour la reprendre
    // lors du renommage futur du fichier :
    $originalName = $_FILES['photo']['name'];
    $originalPath = pathinfo($originalName);
    $fileExtension = $originalPath['extension'];

    // Renomage de l'image a enregistrer
    $secondName = $originalName . $_POST["firstName"][1] . $_POST["lastName"][1] . "." . $fileExtension;
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $newPathFile . $secondName)) ;
}
else{
    $secondName = "user.jpg";
}


// Ajoute l'enseignant
$config->addThisTeacher(addslashes(htmlentities($_POST["lastName"])),addslashes(htmlentities($_POST["firstName"])),addslashes(htmlentities($_POST["gender"])),
    addslashes(htmlentities($_POST["origin"])),addslashes(htmlentities($_POST["surname"])), $secondName,addslashes(htmlentities($_POST["section"])));

?> <!-- Fin php -->
<!-- Redirige vers la page d'index -->
<meta HTTP-EQUIV="Refresh" content="0;URL=../index.php">