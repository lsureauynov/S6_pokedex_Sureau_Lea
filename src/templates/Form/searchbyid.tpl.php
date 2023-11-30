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

    <p>Indiquer l'Id du Pokemon que vous recherchez</p>
    <form action="index.php?p=PokemonController/search" method="post">
    <label> Id du pokemon :</label>
    <input name="id" id="id" type="number"  required/>
    
    <button type="submit">Valider</button>
    </form>
    
</body>
</html>