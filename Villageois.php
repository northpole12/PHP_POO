<?php
/**
 * Created by PhpStorm.
 * User: adrienvp
 * Date: 2019-02-12
 * Time: 11:23
 */

require 'exo_poo.php';

class Villageois extends Character
{
    public function __construct()
    {
        $this->_life = 25;
        $this->_strenght = 5;
    }

    public function nom($nom)
    {
        $this->_name = $nom;
    }
}