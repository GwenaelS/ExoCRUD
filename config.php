<?php


try {
    $bdd = new PDO('mysql:dbname=crudphp;host:localhost','root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}