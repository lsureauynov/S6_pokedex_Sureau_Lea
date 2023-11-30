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

    if (!empty($pokemonbyid)) {
        foreach($pokemonbyid as $pokemon) {
            echo "<h2>" . $pokemon->getName() . "</h2><p>" . $pokemon->getType() . "</p>";
        }
    } else {
        echo "<p>L'id ne correpond à aucun pokemon.</p>";
    }

    ?>

    <br>
    <p>Revenir à l'accueil</p>
    <a href="index.php?p=HomepageController">Accueil</a>
</body>
</html>