<?php

$bdd = new PDO('mysql:host=localhost;dbname=php_poo;charset=utf8', 'root', 'root');

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

function selectPerso($id)
{
    global $bdd;
    $req = $bdd->query("SELECT id, name, type, strenght, life FROM exo_poo WHERE id= '$id'");
    $donnees = $req->fetch(PDO::FETCH_ASSOC);
    return $donnees;
}


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
function attaquer($perso1, $perso2)
{
    $dommage = $perso1->getForce();
    $newLife = $perso2->getLife() - $dommage;
    $perso2->setLife($newLife);
    return "Attaque bien effectué, vous avez causé ".$dommage." à l'adversaire ".$perso2->getName()." il lui reste : ".$perso2->getLife();
}
