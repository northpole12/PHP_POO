<?php

$bdd = new PDO('mysql:host=localhost;dbname=php_poo;charset=utf8', 'root', 'root');
/*
 * fonction pour definir des valeurs par defaut en rapport avec son type(permet creation d'un perso)
 */
function createCharacter($post)
{
    if($post == 'magicien'){
        return new Magicien();
    }
    elseif ($post == 'soldat'){
        return new Soldat();
    }
    elseif ($post == 'villageois'){
        return new Villageois();
    }
}
/*
 * fonction pour inserer les valeurs d'un objet dans la bdd
 */
function insert($character) {
    global $bdd;
    //hydrate($character);
    $req = $bdd->prepare('INSERT INTO php_poo.exo_poo (name, type, strenght, life) VALUES (?, ?, ?, ?)');
    $req->execute([
        $character->getName(),
        $character->getType(),
        $character->getForce(),
        $character->getLife()
    ]);

}
/*
 * fonction selectionne un seul perso de la bdd depuis son id
 */
function selectPerso($id)
{
    global $bdd;
    $req = $bdd->query("SELECT id, name, type, strenght, life FROM exo_poo WHERE id= '$id'");
    $donnees = $req->fetch(PDO::FETCH_ASSOC);
    return $donnees;
}

/*
 * fonction selectionne tout les perso de la bdd
 */
function selectAll()
{
    global $bdd;
    $req = $bdd->query("SELECT id, name, type, strenght, life FROM exo_poo");
    $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
    return $donnees;
}

function combattre($perso1, $perso2)
{

}
/*
 * fonction qui deduis la vie d'un perso en fonction de la force de l'autre
 */
function attaquer($perso1, $perso2)
{
    $dommage = $perso1->getForce();
    $newLife = $perso2->getLife() - $dommage;
    $perso2->setLife($newLife);
    return "Attaque bien effectué, vous avez causé ".$dommage." à l'adversaire ".$perso2->getName()." il lui reste : ".$perso2->getLife();
}
