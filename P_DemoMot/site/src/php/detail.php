<?php

// Auteur : Christian Carbonara
// Date : 20.04.2016
// Résumé : Page de détail

/**
 * Created by PhpStorm.
 * User: carbonarch
 * Date: 20.04.2016
 * Time: 08:30
 */

// Inclut des pages php
include_once("../../resources/lib/header.php");
include_once("../../resources/lib/menu.php");

?> <!-- Fin php -->
<body>
    <div class="col-lg-12">
        <div class="col-lg-1"></div>
            <div class="col-lg-10 table-responsive">
                <table class="table table-hover">
                    <?php

                        // Inclut et instancie la classe
                        include_once("./include/dBUse.php");
                        $config = new dBUse();
                        $teacherInformation = $config->getThisTeacher($_GET["idTeacher"]);
                    ?> <!-- Fin php -->
                    <tbody>
                    <?php
                        // Affiche le nom, prénom et surnom de l'enseignant
                        echo(
                            "<h1>" .
                                $teacherInformation['teaLastName'] . " " . $teacherInformation['teaFirstName'] .
                            "</h1>
                            <h4>" .
                                $teacherInformation['teaSurname'].
                            "</h4>
                            <img class=photoTeacher src=../../resources/images/" .$teacherInformation['teaImage'] . ">
                            <br><br>"
                        ); // Fin du echo

                        // Affiche le genre de l'enseignant
                        switch ($teacherInformation['teaGender']) {
                            case "o":
                                echo("<b>Genre : </b>
                                    <p>Autre </p>");
                                break;
                            case "w":
                                echo("<b>Genre : </b>
                                    <p>Femme </p>");
                                break;
                            case "m":
                                echo("<b>Genre : </b>
                                    <p>Homme </p>");
                                break;
                        } // Fin du switch

                        // Affiche la section et l'origine du surnom de l'enseignant
                        echo(
                            "<b>Section : </b>
                            <p>" .
                                $teacherInformation['secName'] .
                            "</p>
                            <b>Origine du surnom :</b>
                            <p>" .
                                $teacherInformation['teaOrigin'] .
                            "</p>"
                        ); // Fin du echo
                    ?> <!-- Fin php -->
                    </tbody>
                </table>
            </div>
        <div class="col-lg-1"></div>
    </div>
</body>

<?php

    include_once("../../resources/lib/footer.php")
?> <!-- Fin php -->
