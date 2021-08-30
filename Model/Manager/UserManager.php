<?php

class UserManager extends Database {

    public function findByUsername($username) {

        $requete = $this->bdd->prepare("SELECT * FROM utilisateur WHERE username = :username");
        $requete->execute(['username' => $username]);
        $resultat = $requete->fetchAll();

        if($resultat != []) {
            $username = new User($resultat['username'], $resultat['password'], $resultat['id']);
        }
        return $username;

    }

    public function findOneUsername($username) {
        $requete = $this->bdd->prepare("SELECT * FROM utilisateur WHERE username = :username");
        $requete->execute(['username' => $username]);
        $resultat = $requete->fetch();

        return $resultat = new User($resultat['username'], $resultat['password'], $resultat['id']);
    }



}

?>