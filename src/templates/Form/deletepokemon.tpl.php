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
    <?php include('src\templates\Common\header.php');?>


    <p>Supprimer un Pokemon</p>
    <?php
    if (!empty($getpokemon)) {
        foreach($getpokemon as $pokemon) {
            echo "<h2>" . $pokemon->getName() . "</h2><p> de type: " . $pokemon->getType() ." et d'id : " .$pokemon->getId().  "</p>";
        }

        ?>
        <form action="index.php?p=PokemonController/delete" method="post">
        <label> Id du pokemon choisi :</label>
        <select name="id" id="id">
                <?php foreach($getpokemon as $pokemon) {
                    ?><option value= <?php echo $pokemon->getId() ?> ><?php print_r($pokemon->getId()) ?></option><?php
                }?>
            </select>
 
        <button type="submit">Supprimer</button>
        </form>
 

    <?php
    } else {
        echo '<p>Le nom ne correpond à aucun Pokemon.</p>';
    } ?>
    
</body>
</html>