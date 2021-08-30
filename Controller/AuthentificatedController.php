<?php

abstract class AuthentificatedController {

    public $user;

    public function __construct() {
        if(!isset($_SESSION['username'])) {
            header("Location: index.php?controller=secu&action=login");
        }
    }
}

?>