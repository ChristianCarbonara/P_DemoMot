<?php

/**
 * Author: Christian Carbonara
 * Date: 16.03.2016
 * Résumé: Page pour ajouter un enseignant
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
                    <thead>
                    </thead>
                    <?php

                        // Inclut et instancie la classe
                        include_once("./include/dBUse.php");
                        $config = new dBUse();
                        $sectionInformation = $config->getAllSection();
                    ?> <!-- Fin php -->
                    <tbody>
                        <form class='form-horizontal' enctype="multipart/form-data" action='include/insertTeacher.php' method='post'>
                            <div class='form-group'>
                                <label class='col-sm-2 control-label'>Nom</label>
                                <div class='col-sm-3'>
                                    <input type='text' class='form-control' name='lastName' id='lastName' placeholder='Nom'>
                                </div>
                            </div>
                            <br>
                            <div class='form-group'>
                                <label class='col-sm-2 control-label'>Prénom</label>
                                <div class='col-sm-3'>
                                    <input type='text' class='form-control' name='firstName' id='firstName' placeholder='Prénom'>
                                </div>
                            </div>
                            <br>
                            <div class='form-group'>
                                <label class='col-sm-2 control-label'>Genre</label>
                                <div class='col-sm-3'>
                                    <input type='radio' name='gender' value='w'> Femme
                                    <input type='radio' name='gender' value='m'> Homme
                                    <input type='radio' name='gender' value='o''> Autre
                                </div>
                            </div>
                            <br>
                            <div class='form-group'>
                                <label class='col-sm-2 control-label'>Section</label>
                                <div class='col-sm-3'>
                                    <select class='form-control' name='section' id='section'>
                                        <?php

                                            // Affiche les sections
                                            for($i = 1; $i <= count($sectionInformation); $i++){
                                                print("<option value=" . $i . ">" . $sectionInformation[$i - 1]["secName"] . "</option>");
                                            }
                                        ?> <!-- Fin php -->
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class='form-group'>
                                <label class='col-sm-2 control-label'>Pseudo</label>
                                <div class='col-sm-3'>
                                    <input type='text' class='form-control' name='surname' id='surname' placeholder='Pseudo'>
                                </div>
                            </div>
                            <br>
                            <div class='form-group'>
                                <label class='col-sm-2 control-label'>Photo pour l'enseignant</label>
                                <div class='col-sm-3'>
                                    <input type='file' name='photo' id='photo'>
                                </div>
                            </div>
                            <br>
                            <div class='form-group'>
                                <label class='col-sm-2 control-label'>Description</label>
                                <div class='col-sm-3'>
                                    <textarea class='form-control' name='origin' id='origin' placeholder='Description'></textarea>
                                </div>
                            </div>
                            <br>
                            <button class='btn btn-default' type="submit" value='submit' onclick="" >Valider</button>
                        </form>
                    </tbody>
                </table>
            </div>
        <div class="col-lg-1"></div>
    </div>
</body>

<?php

    include_once("../../resources/lib/footer.php")
?> <!-- Fin php -->
