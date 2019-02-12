<?php
/**
 * Created by PhpStorm.
 * User: adrienvp
 * Date: 2019-02-12
 * Time: 09:28
 */

$bdd = new PDO('mysql:host=localhost;dbname=php_poo;charset=utf8', 'root', 'root');

class Character
{
    protected $_name;
    protected $_type;
    protected $_life;
    protected $_strenght;


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->_type = $type;
    }

    /**
     * @return mixed
     */
    public function getLife()
    {
        return $this->_life;
    }

    /**
     * @param mixed $life
     */
    public function setLife($life)
    {
        $this->_life = $life;
    }

    /**
     * @return mixed
     */
    public function getStrenght()
    {
        return $this->_strenght;
    }

    /**
     * @param mixed $strenght
     */
    public function setStrenght($strenght)
    {
        $this->_strenght = $strenght;
    }


}


$personnage1 = new Magicien($nom, $typePerso);