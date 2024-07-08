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
    <h1>Formulaire de modification</h1>
    <form action="" method="post">
        <!-- SELECT ALL -->
        <?php while ($db = $selectU->fetch(PDO::FETCH_ASSOC)) { ?>
            
            <input type="text" name="prenom<?php echo $db["user_id"]; ?>"
                value="<?php echo $db["prenom"]; ?>"/>
            <input type="text" name="nom<?php echo $db["user_id"]; ?>"
                value="<?php echo $db["nom"]; ?>"/>

            <input type="submit" name="update<?php echo $db["user_id"]; ?>" value="Modifier"><br>
            
            <!-- UPDATE TABLE -->
            <?php
            if(isset($_POST["update" . $db["user_id"]])) {
                $prenom = $_POST["prenom" . $db["user_id"]];
                $nom = $_POST["nom" . $db["user_id"]];

                $update = $bdd->query("UPDATE users SET user_id = $db[user_id], prenom = '$prenom', nom = '$nom' WHERE user_id = $db[user_id]");
                header("refresh:0");
            }
            ?>
        <?php } ?>

        
        
    </form>
</body>
</html>