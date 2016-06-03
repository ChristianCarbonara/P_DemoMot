<?php

/**
 * Author: Christian Carbonara
 * Date: 27.04.2016
 * Résumé: Page indiquant que l'enseignant a été supprimé un enseignant
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
                        $config->deleteThisTeacher($_GET["idTeacher"]);
                    ?> <!-- Fin php -->
                    <tbody>
                        <h3>L'enseignant a bien été supprimé</h3>
                    </tbody>
                </table>
            </div>
        <div class="col-lg-1"></div>
    </div>
</body>

<?php

    include_once("../../resources/lib/footer.php")
?> <!-- Fin php -->
