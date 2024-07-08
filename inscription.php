<?php
require_once('config.php');

if(isset($_POST["submit"]))
{
    // var_dump($_POST);
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];

    $insert = $bdd->query("INSERT INTO users(user_id,prenom,nom)
    VALUES (NULL,'$prenom','$nom');");

    header("refresh:0");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once('nav.php')?>
    <h1>Formulaire d'inscription</h1>
    <form action="" method="post">

        <label for="prenom">Prénom :</label><br>
        <input type="text" name="prenom" id="prenom"><br>
        
        <label for="nom">Nom :</label><br>
        <input type="text" name="nom" id="nom"><br>

        <button type="submit" name="submit">S'inscrire</button>
    </form>
</body>
</html>