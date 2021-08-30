<?php

session_start();

require "Autoload.php";

if(!isset($_GET['controller'])) {
    header('Location: index.php?controller=secu&action=login');
}


if($_GET['controller'] == 'moto') {
    $controller = new MotoController();

    if ($_GET['action'] == 'listMoto') {
        $controller->listMotos();
    }
}

if($_GET['controller'] == 'type') {
    $controller = new MotoController();

    if ($_GET['action'] == 'sportives') {
        $controller->listMotosByTypes($_GET['type']);
    }

    if ($_GET['action'] == 'customs') {
        $controller->listMotosByTypes(getType(['type']));
    }

    if ($_GET['action'] == 'enduros') {
        $controller->listMotosByTypes(getType(['type']));
    }

    if ($_GET['action'] == 'roadsters') {
        $controller->listMotosByTypes(getType(['type']));
    }
}


if($_GET['controller'] == 'secu') {
    $controller = new SecuController();

    if ($_GET['action'] == 'login') {
        $controller->login();
    }
}


if($_GET['controller'] == 'moto'){
    $controller = new MotoController();

    if($_GET['action'] == 'add'){
        $controller->add();
    }
    if($_GET['action'] == 'detail' && isset($_GET['id'])){
        $controller->detail($_GET['id']);
    }
}


if ($_GET['action'] == 'delete' && isset($_GET['id'])) {
    $controller->delete($_GET['id']);
}

?>