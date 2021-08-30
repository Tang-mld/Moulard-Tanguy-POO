<html>
<head>
    <?php
    include 'Vue/parts/style.php';
    ?>
</head>
<body>
<div class="container col-md-6">
    <?php
    include 'Vue/parts/header.php';
    ?>

    <div class="text-center">
        <img src="Public/images/Logo-moto.png" alt="Logo du site de moto"><br><br>
    </div>

    <h1 class="text-center">Ajout d'une nouvelle moto</h1><br><br>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="marque">Marque</label>
            <input required name="marque" type="text" class="form-control" id="marque" aria-describedby="marqueHelp" placeholder="Entrez la marque de la moto">
        </div>
        <div class="form-group">
            <label for="modele">Modèle</label>
            <input required name="modele" type="text" class="form-control" id="modele" aria-describedby="modeleHelp" placeholder="Entrez le modèle de la moto">
        </div><br>
        <div class="form-group, text-center">
            <label for="type">Type</label>
            <select required id="type" class="form-control" name="type">
                <option value="sportive">Sportive</option>
                <option value="custom">Custom</option>
                <option value="enduro">Enduro</option>
                <option value="roadster">Roadster</option>
            </select><br>
        </div>

        <div class="form-group, text-center">
            <label for="image">Image de la moto</label>
            <input required type="file" name="image">
        </div><br>
        <div class="text-center">
        <button type="submit" class="btn btn-primary col-md-3">Submit</button>
        </div>
        <?php
        foreach ($errors as $error){
            echo('<div class="col-md-6 offset-3 text-center">
                <small id="emailHelp" class="form-text text-muted">'.$error.'</small><br>
              </div>');
        }
        ?>
    </form>
</div>
</body>
</html>