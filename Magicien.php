<?php
/**
 * Created by PhpStorm.
 * User: adrienvp
 * Date: 2019-02-12
 * Time: 10:54
 */

require 'exo_poo.php';

class Magicien extends Character
{

    public function __construct()
    {
        $this->_life = 75;
        $this->_strenght = 15;
    }

    public function nom($nom)
    {
        $this->_name = $nom;
    }
}