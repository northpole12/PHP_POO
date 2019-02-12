<?php
/**
 * Created by PhpStorm.
 * User: adrienvp
 * Date: 2019-02-12
 * Time: 10:54
 */


/*
 * class enfant de Character met par defaut des valeurs à ces attributs quand la class est appelé (construct)
 */
class Magicien extends Character
{
    public function __construct()
    {
        $this->_life = 50;
        $this->_force = 25;
    }

}




