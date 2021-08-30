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

<h2 class="text-center">Détail de la moto <?php echo('<strong>'.$motos->getMarque().'-'.$motos->getModele().'</strong>') ?></h2><br>


<div class="row g-0 bg-light position-relative">
    <div class="col-md-6 mb-md-0 p-md-4">
        <img src="<?php echo($motos->getImage()) ?>" class="w-100" alt="Image de la moto qui est détaillée">
    </div>
    <div class="col-md-6 p-4 ps-md-0"><br><br>
        <h5 class="mt-0">La moto <?php echo('<strong>'.$motos->getMarque().'-'.$motos->getModele().'</strong>') ?> </h5><br>
        <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some
            real-world content would look like, and we're using it here to give the component a bit of body and size.
            Another instance of placeholder content for this other custom component. It is intended to mimic what some
            real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
        <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some
            real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
        <p>Another instance of placeholder content for this other custom component.</p>
    </div>
</div>

<h2 class="text-center">Caractéristiques</h2><br>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Numéros</th>
        <th scope="col">Marque</th>
        <th scope="col">Modèle</th>
        <th scope="col">type</th>
    </tr>
    </thead>
    <tbody>
    <?php
        echo('<tr>
        <th scope="row">'.$motos->getId().'</th>
        <td>'.$motos->getMarque().'</td>
        <td>'.$motos->getModele().'</td>
        <td>'.$motos->getType().'</td>
    </tr>');
    ?>
    </tbody>
</table><br><br>

<div class="text-center">
    <button type="submit" class="btn btn-success">Voir plus</button>
</div>
</body>
</html>