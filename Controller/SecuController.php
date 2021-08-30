<?php

class SecuController {

    private $userManager;

    public function __construct()
    {
        $this->userManager = new UserManager();
    }

    public function login()
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "Vue/login.php";
        } else {

            if (empty($_POST['username'])) {
                $errors[] = 'Veuillez saisir un username';
            }

            if (empty($_POST['password'])) {
                $errors[] = 'Veuillez saisir un password';
            }

            $userWithThisUsername = $this->userManager->findOneUsername($_POST['username']);


            // Si l'utilisateur n'existe pas :
            if (!$userWithThisUsername) {
                $errors[] = 'Cet utilisateur n\'existe pas !';
            } else {

                if (!password_verify($_POST['password'], $userWithThisUsername->getPassword())) {
                    $errors[] = 'Ce password n\'est pas valide';
                    // Du moment ou j'ai quelque chose dans $_SESSION['username'] cela veut dire que quelqu'un est connecté
                }
            }

            if (count($errors) == 0) {
                $_SESSION['username'] = $userWithThisUsername->getUsername();
                header("Location: index.php?controller=moto&action=listMoto");
            }else{
                include "Vue/login.php";
            }
        }


    }
}

?>