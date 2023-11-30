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
    <?php

    if (!empty($getpokemon)) {
        foreach($getpokemon as $pokemon) {
            echo "<h2>" . $pokemon->getName() . "</h2><p> de type: " . $pokemon->getType() ." et d'id : " .$pokemon->getId().  "</p>";
        }
        echo "<p> Selectionner le Pokemon a modifié : </p>";?>

            <form action="index.php?p=PokemonController/update" method="post">
            <label> Id du pokemon choisi :</label>
            <input name="id" id="id" type="number"  required/>

            <br />

            <label> Nom du Pokemon mise à jour :</label>
            <input name="newname" id="name" type="text" required/>

            <br />

            <label> Type du Pokemon mise à jour :</label>
            <input name="newtype" id="name" type="text" required/>

            <br />

        <button type="submit">Mettre à jour</button>

        </form>
        <?php
    } else {
        echo "<p>Le nom ne correpond à aucun Pokemon.</p>";
    }

    ?>

    <br>
    <p>Revenir à l'accueil</p>
    <a href="index.php?p=HomepageController">Accueil</a>
</body>
</html>