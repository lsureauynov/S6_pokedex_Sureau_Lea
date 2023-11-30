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

    <p>Indiquer le nom du Pokemon que vous cherchez à mettre à jour.</p>
    <form action="index.php?p=FormController/form_update" method="post">
    <label> Nom du Pokemon :</label>
    <input name="name" id="name" type="text"  required/>
    
    <button type="submit">Valider</button>
    </form>
    
</body>
</html>

