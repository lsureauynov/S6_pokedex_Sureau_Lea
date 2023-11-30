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
    
    <br>

    <p>Liste des Pokemon</p>
    <ul><?php
    if(!empty($pokemonList)) {
        foreach($pokemonList as $pokemon) { ?>
        <li>
            <?php  echo "<h2>" . $pokemon->getName() . "</h2><p>" . $pokemon->getType() . "</p>" ?>

        </li>
        <?php }
        }?>
    </ul>
    
  
</body>
</html>