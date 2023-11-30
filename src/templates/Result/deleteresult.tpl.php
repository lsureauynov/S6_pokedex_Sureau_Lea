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
    if(!empty($pokemondelete)) {
        foreach($pokemondelete as $pokemon) {
            echo "<p> Le Pokemon " . $pokemon->getName() . " " . $pokemon->getType() . " a bien été supprimé.</p>";
        }
    } else {
        echo "Une erreur s'est produite. Veuillez renseigner l'id exact du Pokemon à supprimer.";
    }

    ?>

    <br>
    <p>Revenir à l'accueil</p>
    <a href="index.php?p=HomepageController">Accueil</a>
</body>
</html>