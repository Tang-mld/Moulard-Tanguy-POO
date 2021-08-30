<?php

class MotoManager extends Database {

    public function oneMoto($id) {
        $requete = $this->bdd->prepare("SELECT * FROM moto WHERE id = :id");
        $requete->execute(["id" => $id]);
        $resultats = $requete->fetch();

        if($resultats) {
            return new Moto($resultats['marque'], $resultats['modele'], $resultats['type'], $resultats['image'],
                $resultats['id']);
        } else {
            return null;
        }
    }

    public function allMoto() {
        $motos = [];

        $requete = $this->bdd->prepare("SELECT * FROM moto");
        $requete->execute();
        $resultats = $requete->fetchAll();

        foreach ($resultats as $resultat) {
            $motos[] = new Moto($resultat['marque'], $resultat['modele'], $resultat['type'], $resultat['image'],
                $resultat['id']);
        }
        return $motos;
    }

    // Cette fonction permet de vérifier sur tous les champs uniques que avant de l'injecter
    // dans la bdd ils sont bien uniques
    public function findByMarque($marque) {
        $motos = [];
        $requete = $this->bdd->prepare("SELECT * FROM moto WHERE marque = :marque");
        $requete->execute(['marque' => $marque]);
        $resultat = $requete->fetch();

        if($resultat != []) {
            $motos = new Moto($resultat['marque'], $resultat['modele'], $resultat['type'], $resultat['image'],
                $resultat['id']);
        }
        return $motos;
    }

    // Cette fonction permet de vérifier sur tous les champs uniques que avant de l'injecter
    // dans la bdd ils sont bien uniques
    public function findByType($type) {
        $motosTypes = [];
        $requete = $this->bdd->prepare("SELECT * FROM moto WHERE type = :type");
        $requete->execute(['type' => $type]);
        $resultat = $requete->fetch();

        if ($resultat != []) {
            $motosTypes = new Moto($resultat['marque'], $resultat['modele'], $resultat['type'], $resultat['image'],
                $resultat['id']);
        }
        return $motosTypes;
    }


    // Cette fonction permet de vérifier sur tous les champs uniques que avant de l'injecter
    // dans la bdd ils sont bien uniques
    public function findByModele($modele) {
        $motos = [];
        $requete = $this->bdd->prepare("SELECT * FROM moto WHERE modele = :modele");
        $requete->execute(['modele'=> $modele]);
        $resultat = $requete->fetch();

        if($resultat != []) {
            $motos = new Moto($resultat['marque'], $resultat['modele'], $resultat['type'], $resultat['image'],
                $resultat['id']);
        }
        return $motos;
    }

    public function insertMoto(Moto $moto){
        try{
            $requete = $this->bdd->prepare("INSERT INTO moto (marque, modele, type, image, id)
                    VALUE (:marque, :modele, :type, :image, :id)");

            $requete->execute([
                'marque'=> $moto->getMarque(),
                'modele'=> $moto->getModele(),
                'type'=> $moto->getType(),
                'image'=> $moto->getImage(),
                'id' => $moto->getId()
            ]);

        } catch (\PDOException $e){
            var_dump($e);
        }
    }

    public function updateMoto(Moto $moto){
        try {
            $requete = $this->bdd->prepare("UPDATE moto SET
        marque = :marque, modele = :modele, type = :type, image = :image WHERE id = :id");

            $requete->execute([
                'marque'=> $moto->getMarque(),
                'modele'=> $moto->getModele(),
                'type'=> $moto->getType(),
                'image'=> $moto->getImage(),
                'id' => $moto->getId()
            ]);

        } catch (\PDOException $e){
            throw $e;
        }
    }

    public function deleteMoto($id) {
        $request = $this->bdd->prepare("DELETE FROM moto WHERE id = :id");

        $request->execute(['id' => $id]);
    }

}

?>