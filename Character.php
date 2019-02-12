<?php
/**
 * Created by PhpStorm.
 * User: adrienvp
 * Date: 2019-02-12
 * Time: 09:28
 */


class Character
{
    public $_name;
    public $_type;
    public $_life;
    public $_force;




    /**
     * @return mixed
     * retourne la valeur comprise dans la variable
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     * remplace la valeur comprise dans la variable
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
    public function getForce()
    {
        return $this->_force;
    }

    /**
     * @param mixed $force
     */
    public function setForce($force)
    {
        $this->_force = $force;
    }


}




