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

<h2 class="text-center">Liste des motos par type</h2><br>


<table class="table">
    <thead>
    <tr>
        <th scope="col">Numéros</th>
        <th scope="col">Image</th>
        <th scope="col">Marque</th>
        <th scope="col">Modèle</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($motosTypes as $motosType) {
        echo('<tr>
        <th scope="row">'.$motosType->getId().'</th>
        <td><img src="'.$motosType->getImage().'"></td>
        <td>'.$motosType->getMarque().'</td>
        <td>'.$motosType->getModele().'</td>
    </tr>');
    }
    ?>
    </tbody>
</table>
</body>
</html>