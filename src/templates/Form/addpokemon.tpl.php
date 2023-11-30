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

    <p>Ajouter un Pokemon</p>
    <form action="index.php?p=PokemonController/add" method="post">
        <label> Nom du Pokemon à ajouter : </label>
        <input name="name" id="name" type="text"  required/>

        <br />

        <label> Type du Pokemon à ajouter : </label>
        <input name="type" id="type" type="text"  required/>

        <br />

        <button type="submit">Ajouter</button>
    </form>
    
</body>
</html>