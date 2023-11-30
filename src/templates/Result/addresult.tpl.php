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


    if(!empty($pokemontoadd)) {
        foreach($pokemontoadd as $pokemon) {
            echo "<p> Le Pokemon " . $pokemon->getName() . " de type  " . $pokemon->getType() . " a bien été ajouté.</p>";
        }
    } else {
        echo "Une erreur s'est produite. Veuillez renseigner le nom et le type du Pokemon a ajouter.";
    }

    ?>

    <br>
    <p>Revenir à l'accueil</p>
    <a href="index.php?p=HomepageController">Accueil</a>
</body>
</html>