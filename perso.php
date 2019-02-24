<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'Action.php';
include 'Character.php';
include 'Magicien.php';
include 'Soldat.php';
include 'Villageois.php';

/*
 * si nil y a valeur id dans get alors afficher les donnée de l'id correspondant
 */
if(isset($_GET))
{
    foreach (selectPerso($_GET['persoA']) as $perso_data)
    {
        echo $perso_data;

    }
    foreach (selectPerso($_GET['persoB']) as $perso_data1){
        echo $perso_data1;
    }

} else {
    if (isset($_POST))
    {
        if (!empty($_POST))
        {
            //lancer la fonction et rajouter avec les setter les valeur manquante puis inserer en bdd
            $personnage1 = createCharacter($_POST['type']);
            $personnage1->setName($_POST['name']);
            $personnage1->setType($_POST['type']);
            insert($personnage1);

        }
        //permet de selectionner tout les personnage dispo en bdd
        echo "<form action='perso.php' method='GET'>";
            echo "<select name='persoA' value='']'>";
            foreach (selectAll() as $key => $donnee)
            {
                $perso_id = $donnee["id"];
                $perso_name = $donnee["name"];
                echo "<option value='$perso_id'>$perso_name</option>";
            }
            echo "</select>";

            echo "<select name='persoB' value=''>";
            foreach (selectAll() as $key => $donnee)
            {
                $perso_id = $donnee["id"];
                $perso_name = $donnee["name"];
                echo "<option value='$perso_id'>$perso_name</option>";
            }

            echo "</select>";
            echo "<input type='submit'>";
        echo "</form>";

    } else {
        echo "<form action='perso.php' method='get'>";
            echo "<select name='persoA' value=''>";
            foreach (selectAll() as $key => $donnee)
            {
                $perso_id = $donnee["id"];
                $perso_name = $donnee["name"];
                echo "<option value='$perso_id'>$perso_name</option>";
            }
            echo "</select>";

            echo "<select name='persoB' value=''>";
            foreach (selectAll() as $key => $donnee)
            {
                $perso_id = $donnee["id"];
                $perso_name = $donnee["name"];
                echo "<option value='$perso_id'>$perso_name</option>";
            }
            echo "</select>";
            echo "<input type='submit'>";
        echo "</form>";
    }
}

?>

