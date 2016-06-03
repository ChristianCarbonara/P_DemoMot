<?php

/**
 * Auteur : Christian Carbonara
 * Date : 13.04.2016
 * Résumé : Class contenant les fonction utilisé pour la base de données
 */

class dBUse {

    /**
     * Prend tous les enseignants
     * Retourne les enseignants dans un tableau
     *
     * @return mixed
     */
    public function getAllTeachers(){

        // Instancie la fonction
        $bdd = $this->dBConnect();
        $BddTeacher= $this->executeGetRequest($bdd, 'SELECT `idTeacher`, `teaLastName`, `teaFirstName`, `teaSurname`, `fkSection` FROM t_teacher');

        // Déconnection de la base de données
        $this->dBUnconnect($bdd);

        return $BddTeacher;
    } // Fin getAllTeachers()

    /**
     * Prend toutes les sections
     * Retourne les sections dans un tableau
     *
     * @return mixed
     */
    public function getAllSection(){

        // Instancie la fonction
        $bdd = $this->dBConnect();
        $BddSection= $this->executeGetRequest($bdd, 'SELECT * FROM t_section');

        // Déconnection de la base de données
        $this->dBUnconnect($bdd);

        return $BddSection;
    } // Fin getAllSection()

    /**
     * Prend toutes les informations de l'enseignant séléctionné
     * Retourne l'enseignant dans un tableau
     *
     * @param $idThisTeacher
     * @return mixed
     */
    public function getThisTeacher($idThisTeacher){

        // Instancie la fonction
        $bdd = $this->dBConnect();
        $BddThisTeacher= $this->executeGetRequest($bdd, "SELECT * FROM t_teacher INNER JOIN t_section ON fkSection = idSection WHERE idTeacher ='$idThisTeacher'");

        // Déconnection de la base de données
        $this->dBUnconnect($bdd);

        return $BddThisTeacher[0];
    } // Fin getThisTeacher()

    /**
     * Supprime toutes les informations d'enseignant choisi
     *
     * @param $idThisTeacher
     */
    public function deleteThisTeacher($idThisTeacher){

        // Instancie la fonction
        $bdd = $this->dBConnect();
        $this->executeGetRequest($bdd, "DELETE FROM t_teacher WHERE idTeacher ='$idThisTeacher'");

        // Déconnection de la base de données
        $this->dBUnconnect($bdd);
    } // Fin deleteThisTeacher()

    /**
     * Ajout un enseignant avec les valeurs définies
     *
     * @param $lastName
     * @param $firstName
     * @param $gender
     * @param $surname
     * @param $origin
     * @param $section
     */
    public function addThisTeacher($lastName,$firstName,$gender,$origin,$surname,$image,$section){

        // Instancie la fonction
        $bdd = $this->dBConnect();
        $this->executeGetRequest($bdd, "INSERT INTO `t_teacher` (`idTeacher`, `teaLastName`, `teaFirstName`, `teaGender`, `teaOrigin`, `teaSurname`, `teaImage`, `fkSection`) VALUES
                                                          (NULL, '$lastName', '$firstName', '$gender', '$origin', '$surname','$image', '$section')");

        // Déconnection de la base de données
        $this->dBUnconnect($bdd);
    } // Fin deleteThisTeacher()

    public function addThisUser($nameUser,$passwordUser){

        // Instancie la fonction
        $bdd = $this->dBConnect();
        $newPassword = password_hash($passwordUser);

        $this->executeGetRequest($bdd, "INSERT INTO `t_user` (`idUser`, `useName`, `usePassword`) VALUES
                                                          (NULL, '$nameUser', '$newPassword')");

        // Déconnection de la base de données
        $this->dBUnconnect($bdd);
    } // Fin deleteThisTeacher()

    /**
     * Récupère le nom et le mot de passe de l'utilisateur concerné dans un tableau
     * Retourne le tableau de l'utilisateur
     *
     * @param $userName
     * @return mixed
     */
    public function authentification($userName){

        // Instancie la fonction
        $bdd = $this->dBConnect();
        $user = $this->executeGetRequest($bdd, "SELECT `useName`, `usePassword` FROM `t_user` WHERE `useName` = '$userName';");

        // Déconnection de la base de données
        $this->dBUnconnect($bdd);

        return $user[0];
    }

    /**
     * Connection à la base de données
     * Retourne la base de données
     *
     * @return PDO
     */
    private function dBConnect(){

        # Essaie de se connecter à la base de données
        # S'il y a une erreur, récupère l'erreur et l'affiche
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=db_nickname;charset=utf8', 'dbLoginUserq', '.Etml-');
        }
        catch(Exception $exception) {
            die('Erreur : '.$exception->getMessage());
        }

        return $bdd;
    } // Fin dBConnect()

    /**
     * Récupère la base de données et la place dans un tableau associatif
     * Retourne le tableaux
     *
     * @param $bdd
     * @param $strSQLRequest
     * @return mixed
     */
    private function executeGetRequest($bdd, $strSQLRequest){

        // Envoi de la requete
        $query = $bdd->prepare($strSQLRequest);
        $query->execute();

        // Creation et renvoi d'un tableau
        $valueFetchAll = $query->fetchAll();
        return $valueFetchAll;
    } // Fin exectuteGetRequest()

    /**
     * Déconnect de la base de données
     *
     * @param $db
     */
    private function dBUnconnect($db){
        unset($db);
    } // Fin dBUnconnect()
}