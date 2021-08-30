<?php

class MotoController extends AuthentificatedController {

    private $motoManager;

    public function __construct() {
        parent::__construct();
        $this->motoManager = new MotoManager();
    }

    public function listMotos() {
        $allMoto = new MotoManager();
        $motos = $allMoto->allMoto();
        include "Vue/listMoto.php";
    }

    public function listMotosByTypes($type) {
        $allMotosByTypes = new MotoManager();
        $motosTypes = $allMotosByTypes->findByType($type);
        include "Vue/listMotosByTypes.php";
    }

    public function detail($id) {
        $detailMoto = new MotoManager();
        $motos = $detailMoto->oneMoto($id);
        include 'Vue/detailMoto.php';
    }

    public function delete($id) {
        $moto = $this->motoManager->deleteMoto($id);
        header("Location: index.php?controller=moto&action=listMoto");
    }

    public function add() {
        $errors = [];
        $motos = $this->motoManager->allMoto();

        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            include 'Vue/moto-add.php';

        }

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            if(empty($_POST['marque'])) {
                $errors[] = 'Veuillez ajouter une marque';
            }

            if(empty($_POST['modele'])) {
                $errors[] = 'Veuillez ajouter un modèle';
            }

            $allowedTypes = ['sportive', 'custom', 'enduro', 'roadster'];

            if(!in_array($_POST['type'], $allowedTypes)) {
                $errors[] = 'Ne change pas les types dans la console !';
            }

            if($_FILES['image']['size'] == 0){
                $errors[] = 'Veuillez ajouter une image';

            } else {
                $accepted = ['image/jpeg', 'image/png'];

                if (!in_array($_FILES['image']['type'], $accepted)) {
                    $errors[] = 'Le fichier uploadé n\'est pas accepté';
                }

                if ($_FILES['image']['size'] > 1000000) {
                    $errors[] = 'L\'image est trop volumineuse';
                }

                if (count($errors) == 0) {
                    $modeleUnique = 'image'.uniqid().'.'.explode("/", $_FILES['image']['type'])[1];

                    move_uploaded_file($_FILES['image']['modele'], 'Public/images/'.$modeleUnique);

                    $moto = new Moto($_POST['marque'], $_POST['tmp_name'], $_POST['type'], 'Public/images/'.$modeleUnique);
                    $this->motoManager->insertMoto($moto);

                    header("Location: index.php?controller=moto&action=listMoto");
                }
            }
        }
    }
}

?>