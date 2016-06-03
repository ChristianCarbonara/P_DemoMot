
 // Auteur : Christian Carbonara
 // Date : 27.04.2016
 // Résumé : Page de validation des informations entrées par l'utilisateur

/**
 * Demande une confirmation pour la suppression de l'enseignant
 *
 * @param idTeacher
 */
function verifDelete(idTeacher){

    var sendVerif = confirm("Voulez-vous vraiment supprimer cet(te) enseignant(e) ?");
    if (sendVerif == true) {
        window.location = "../php/deleteSuccess.php?idTeacher=" + idTeacher;
    }
}