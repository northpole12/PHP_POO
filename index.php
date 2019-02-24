<?php
/*
 * affiche les erreurs
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
 * création de la bdd
 */
$bdd = new PDO('mysql:host=localhost;dbname=php_poo;charset=utf8', 'root', 'root');

include 'Action.php';
include 'Character.php';
include 'Magicien.php';
include 'Soldat.php';
include 'Villageois.php';



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>jeux</title>
</head>
<body>
    <form action="perso.php" method="POST">
        <input type="text" name="name">
        <select name="type" value="">
            <option value="magicien">magicien</option>
            <option value="soldat">soldat</option>
            <option value="villageois">villageois</option>
        </select>
        <input type="submit">
        <?php
/*
        if (isset($_GET['id']))
        {
            var_dump(selectPerso($_GET['id']));

        }*/
        ?>
    </form>
</body>
</html>