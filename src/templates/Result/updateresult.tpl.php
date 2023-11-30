<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($data)) {
        echo $data['title'];
    } ?></title>
</head>
<body>
    <h1>Pokemon</h1>
    <?php

    if (!empty($newpokemon)) {

        foreach($newpokemon as $pokemon) {
            echo "<p> Le pokemon est devenu ". $pokemon->getName() . " de type " . $pokemon->getType() ."</p>";
        }
    } else {
        echo "<p>Une erreure s'est produite. Veuillez renseigner l'id exact du Pokemon à mettre à jour.</p>";
    }




    ?>

    <br>
    <p>Revenir à l'accueil</p>
    <a href="index.php?p=HomepageController">Accueil</a>
</body>
</html>