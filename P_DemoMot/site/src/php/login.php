<?php

// Auteur : Christian Carbonara
// Date : 11.05.2016
// Résumé : Page de connexion

// Inclut des pages php
include_once("../../resources/lib/header.php");
include_once("../../resources/lib/menu.php");

?> <!-- Fin php -->

<body>
<div class="col-lg-12">
    <div class="col-lg-1"></div>
    <div class="col-lg-10 table-responsive">
            <thead>
            </thead>
            <?php

            // Inclut et instancie la classe
            include_once("./include/dBUse.php");
            $config = new dBUse();
            ?> <!-- Fin php -->
            <tbody>
            <form class='form-horizontal' method='post' action='include/connexion.php' enctype="multipart/form-data">
                <div class='form-group'>
                    <label class='col-sm-2 control-label'>Nom d'utilisateur</label>
                    <div class='col-sm-3'>
                        <input type='text' class='form-control' name='nameUser' id='nameUser' placeholder="Nom d'utilisateur">
                    </div>
                </div>
                <div class='form-group'>
                    <label class='col-sm-2 control-label'>Mot de passe</label>
                    <div class='col-sm-3'>
                        <input type='password' class='form-control' name='passwordUser' id='passwordUser'>
                    </div>
                </div>
                <button class='btn btn-default' type="submit" value='submit' onclick='' >Valider</button>
            </form>
            </tbody>
    </div>
    <div class="col-lg-1"></div>
</div>
</body>

<?php

include_once("../../resources/lib/footer.php")
?> <!-- Fin php -->