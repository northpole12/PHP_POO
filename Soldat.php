<?php
/**
 * Created by PhpStorm.
 * User: adrienvp
 * Date: 2019-02-12
 * Time: 11:14
 */

require 'exo_poo.php';

class Soldat extends Character
{
    public function __construct()
    {
        $this->_life = 100;
        $this->_strenght = 75;
    }

    public function nom($nom)
    {
        $this->_name = $nom;
    }
}