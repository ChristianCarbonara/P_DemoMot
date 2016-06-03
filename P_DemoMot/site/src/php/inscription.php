<?php

// Auteur : Christian Carbonara
// Date : 11.05.2016
// Résumé :

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
            $teacherInformation = $config->getAllTeachers();
            $sectionInformation = $config->getAllSection();

            // Compte le nombre d'enseignants
            $teacherNbr = count($teacherInformation);
            ?> <!-- Fin php -->
            <tbody>
            <form class='form-horizontal' enctype="multipart/form-data" action='include/insertUser.php' method='post'>
                <div class='form-group'>
                    <label class='col-sm-2 control-label'>Nom d'utilisateur</label>
                    <div class='col-sm-3'>
                        <input type='text' class='form-control' name='userNameCreate' id='userNameCreate' placeholder="Nom d'utilisateur">
                    </div>
                </div>
                <br>
                <div class='form-group'>
                    <label class='col-sm-2 control-label'>Mot de passe</label>
                    <div class='col-sm-3'>
                        <input type='text' class='form-control' name='passwordUserCreate' id='passwordUserCreate' placeholder='Mot de passe'>
                    </div>
                </div>
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