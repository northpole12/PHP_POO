<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'Action.php';
include 'Character.php';
include 'Magicien.php';
include 'Soldat.php';
include 'Villageois.php';

if(isset($_GET['id']))
{
    foreach (selectPerso($_GET['id']) as $perso_data)
    {
        echo $perso_data;
    }

} else {
    if (isset($_POST))
    {
        if (!empty($_POST))
        {
            $personnage1 = createCharacter($_POST['type']);
            $personnage1->setName($_POST['name']);
            $personnage1->setType($_POST['type']);
            insert($personnage1);

        }
        echo "<select>";
        foreach (selectAll() as $key => $donnee)
        {
            $perso_id = $donnee["id"];
            $perso_name = $donnee["name"];
            echo "<option value='$perso_id'>$perso_name</option>";
        }
        echo "</select>";
        echo "<select>";
        foreach (selectAll() as $key => $donnee)
        {
            $perso_id = $donnee["id"];
            $perso_name = $donnee["name"];
            echo "<option value='$perso_id'>$perso_name</option>";
        }
        echo "</select>";
    } else {

    }
}

?>

