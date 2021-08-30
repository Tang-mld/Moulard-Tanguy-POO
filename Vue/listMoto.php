<html>
<head>
    <?php
    include "parts/style.php";
    ?>
</head>
<body>
<?php
include "parts/header.php";
?>

<div class="text-center">
    <img src="Public/images/Logo-moto.png" alt="Logo du site de moto"><br><br>
</div>

<h2 class="text-center">Liste des motos</h2><br>

<h3 class="text-center">Toutes catégories</h3><br><br>

<a href="index.php?controller=moto&action=add">Ajouter une moto au catalogue</a><br><br>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Numéros</th>
        <th scope="col">Image</th>
        <th scope="col">Marque</th>
        <th scope="col">Modèle</th>
        <th scope="col">type</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($motos as $moto) {
        echo('<tr>
        <th scope="row">'.$moto->getId().'</th>
        <td><img src="'.$moto->getImage().'"></td>
        <td>'.$moto->getMarque().'</td>
        <td>'.$moto->getModele().'</td>
        <td>'.$moto->getType().'</td>
        <td>
        <a href="index.php?controller=moto&action=detail&id='.$moto->getId().'">Voir le détail de la moto</a><br>
        <a href="index.php?controller=moto&action=delete&id='.$moto->getId().'">Supprimer cette moto</a>
        </td>
    </tr>');
    }
    ?>
    </tbody>
</table>
</body>
</html>