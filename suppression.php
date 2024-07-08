<?php
require_once('config.php');
$selectU =$bdd->query("SELECT * FROM users");
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
    <h1>Formulaire de suppression</h1>
    <form action="" method="post">
        <!-- SELECT ALL -->
        <?php while ($db = $selectU->fetch(PDO::FETCH_ASSOC)) { ?>
            
           <input type="submit" name="delete<?php echo $db["user_id"];?>" value="Supprimer <?php echo $db["prenom"] . " " . $db["nom"]; ?>"/><br>
        <!-- DELETE ITEM -->
           <?php if (isset($_POST["delete" . $db["user_id"]])) {
                $delete = $bdd->query("DELETE FROM users WHERE user_id = $db[user_id]");
                header("refresh:0");
           } ?>
        <?php } ?>
    </form>
</body>
</html>